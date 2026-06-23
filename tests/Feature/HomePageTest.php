<?php

namespace Tests\Feature;

use App\Models\ContactMessage;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        config([
            'database.default' => 'sqlite',
            'database.connections.sqlite.database' => ':memory:',
            'database.connections.sqlite.foreign_key_constraints' => true,
        ]);
        DB::purge('sqlite');

        Schema::dropIfExists('contact_messages');
        Schema::create('contact_messages', function (Blueprint $table): void {
            $table->id();
            $table->string('name', 120);
            $table->string('email', 190);
            $table->string('subject', 160);
            $table->text('message');
            $table->timestamps();
        });
    }

    public function test_home_page_loads(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('Evan');
        $response->assertSee('Kusuma');
        $response->assertSee('Selected technical work');
        $response->assertSee('data-project-slider', false);
        $response->assertSee('data-project-slider-next', false);
        $response->assertSee('system/navigation');
        $response->assertSee('Five practical capability areas');
        $response->assertSee('Mobile Application Development');
        $response->assertSee('images/Speaktoo.png');
        $response->assertSee('images/capability-web-frontend.png');
        $response->assertSee('Team &amp; Project Coordination', false);
        $response->assertDontSee('Interface planning board representing coordinated project delivery');
        $response->assertSee('show all types');
        $response->assertSee('Android App Architecture');
        $response->assertSee('Network Design and Subnet Planning');
        $response->assertSee('~/about');
        $response->assertSee('~/projects');
        $response->assertSee('~/certs');
        $response->assertSee('Credential highlights');
        $response->assertSee('images/certificates/android-intermediate.png');
        $response->assertSee('Belajar Fundamental Aplikasi Android');
        $response->assertSee('backend/contact.store');
        $response->assertDontSee('CV_Evan_Darya_Kusuma.pdf');
    }

    public function test_about_page_loads(): void
    {
        $response = $this->get('/about');

        $response->assertOk();
        $response->assertSee('Software, networks, analysis, and practical delivery');
        $response->assertSee('Five expandable capability areas');
        $response->assertSee('Operational Planning and Execution');
        $response->assertSee('Institut Teknologi Sepuluh Nopember');
        $response->assertSee('Himpunan Mahasiswa Teknologi Informasi ITS');
        $response->assertSee('Credentials now have their own page');
        $response->assertSee(route('certificates', absolute: false));
    }

    public function test_certificates_page_loads(): void
    {
        $response = $this->get('/certificates');

        $response->assertOk();
        $response->assertSee('Certificate archive and CV skill map');
        $response->assertSee('Cyber Security');
        $response->assertSee('Programming &amp; Scripting', false);
        $response->assertSee('All certificate covers');
        $response->assertSee('Belajar Membuat Aplikasi Android untuk Pemula');
        $response->assertSee('Belajar Dasar Git dengan GitHub');
        $response->assertSee('Cybersecurity Foundations');
        $response->assertSee('images/certificates/solid.png');
        $response->assertSee('images/certificates/cybersecurity-foundations.png');
        $response->assertSee('images/Certificate/Android Pemula.pdf');
        $response->assertSee('images/Certificate/Belajar Git.pdf');
        $response->assertDontSee('capability areas');
        $response->assertDontSee('source proofs');
    }

    public function test_projects_page_loads(): void
    {
        $response = $this->get('/projects');

        $response->assertOk();
        $response->assertSee('Past Projects');
        $response->assertSee('Android Mobile Forensics Validation');
        $response->assertSee('Speaktoo');
        $response->assertSee('images/project-network.jpg');
        $response->assertSee('images/project-quantum.jpg');
        $response->assertSee('images/project-code.jpg');
        $response->assertSee('Representative image: Rawpixel / Public Domain');
        $response->assertSee('https://github.com/ShinjiTakeru00/speaktoo-bangkit2024');
        $response->assertSee('Short_Link_FP_Pemweb');
        $response->assertSee('github-archive');
    }

    public function test_contact_form_stores_messages(): void
    {
        $this->withoutMiddleware();

        $response = $this->post('/contact', [
            'name' => 'Hiring Manager',
            'email' => 'hiring@example.com',
            'subject' => 'Portfolio opportunity',
            'message' => 'Hello Evan, this is a test message long enough for validation.',
        ]);

        $response->assertRedirect('/#contact');
        $response->assertSessionHas('contact_status');

        $this->assertDatabaseHas('contact_messages', [
            'name' => 'Hiring Manager',
            'email' => 'hiring@example.com',
            'subject' => 'Portfolio opportunity',
        ]);
    }

    public function test_contact_form_validates_input(): void
    {
        $this->withoutMiddleware();

        $response = $this->from('/#contact')->post('/contact', [
            'name' => '',
            'email' => 'not-an-email',
            'subject' => '',
            'message' => 'short',
        ]);

        $response->assertRedirect('/#contact');
        $response->assertSessionHasErrors(['name', 'email', 'subject', 'message']);
        $this->assertSame(0, ContactMessage::count());
    }

    public function test_backend_status_reports_content_counts(): void
    {
        ContactMessage::create([
            'name' => 'Test Sender',
            'email' => 'sender@example.com',
            'subject' => 'Status check',
            'message' => 'This stored contact message should affect the backend status count.',
        ]);

        $response = $this->getJson('/backend/status');

        $response
            ->assertOk()
            ->assertJsonPath('status', 'ok')
            ->assertJsonPath('backend', 'Laravel')
            ->assertJsonPath('storage.contact_messages', 1)
            ->assertJsonPath('content.projects', 6)
            ->assertJsonPath('content.capability_groups', 5);
    }
}
