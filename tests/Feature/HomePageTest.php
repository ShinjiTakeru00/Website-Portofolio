<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    public function test_home_page_loads(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('Evan');
        $response->assertSee('Kusuma');
        $response->assertSee('Selected technical work');
        $response->assertSee('Five practical capability areas');
        $response->assertSee('Mobile Application Development');
        $response->assertSee('images/Speaktoo.png');
        $response->assertSee('images/UI UX.png');
        $response->assertSee('show all types');
        $response->assertSee('Android App Architecture');
        $response->assertSee('Network Design and Subnet Planning');
        $response->assertSee('~/about');
        $response->assertSee('~/projects');
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
}
