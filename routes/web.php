<?php

use App\Http\Controllers\ContactMessageController;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Route;

$portfolioData = function () {
    return [
        'profile' => [
            'name' => 'Evan Darya Kusuma',
            'role' => 'Information Technology Graduate / Software & Network Engineering',
            'location' => 'Surabaya, East Java',
            'intro' => 'Information Technology graduate from Institut Teknologi Sepuluh Nopember with hands-on experience across mobile development, web applications, networking labs, technical documentation, and security-aware system design.',
            'email' => 'evankusuma00@gmail.com',
            'phone' => '08970320550',
            'links' => [
                ['label' => 'GitHub', 'url' => 'https://github.com/ShinjiTakeru00'],
                ['label' => 'LinkedIn', 'url' => 'https://www.linkedin.com/in/evankusuma00'],
            ],
        ],
        'projects' => [
            [
                'title' => 'Android Mobile Forensics Validation',
                'type' => 'Digital Forensics / Academic Research',
                'description' => 'Implemented the NIST SP 800-86 method to validate mobile forensic investigation workflows on Android device evidence in a POLDA Jawa Timur case study.',
                'outcome' => 'Performed forensic acquisition, artifact extraction, hash validation, timeline analysis, and chain-of-custody documentation to support investigative findings.',
                'tags' => ['NIST SP 800-86', 'DFIR', 'Android Forensics', 'Cellebrite', 'FTK Imager'],
                'year' => '2025',
                'status' => 'Thesis project',
                'role' => 'DFIR Analyst',
                'image' => null,
                'image_alt' => null,
                'image_credit' => null,
                'image_fit' => 'cover',
                'repo_url' => null,
                'repo_links' => [],
                'bullets' => [
                    'Performed Android evidence acquisition using Cellebrite UFED, ADB, and FTK Imager.',
                    'Validated evidence integrity using MD5 and SHA-256 hashing.',
                    'Analyzed WhatsApp artifacts, PDF documents, and timeline activity.',
                ],
            ],
            [
                'title' => 'Speaktoo',
                'type' => 'Bangkit Capstone / Mobile Development',
                'description' => 'Built an Android English pronunciation learning app using speech recognition and real-time feedback to personalize the learning experience.',
                'outcome' => 'Delivered a production-level mobile app in a cross-functional team of six using Agile Scrum, Git-based workflow, Kotlin, MVVM architecture, and Google Cloud Speech API integration.',
                'tags' => ['Kotlin', 'MVVM', 'Firebase', 'Google Cloud', 'Speech API'],
                'year' => '2024',
                'status' => 'Capstone project',
                'role' => 'Mobile Developer',
                'image' => 'images/Speaktoo.png',
                'image_alt' => 'Speaktoo app logo with speech wave marks',
                'image_credit' => 'Project asset',
                'image_fit' => 'contain',
                'repo_url' => 'https://github.com/ShinjiTakeru00/speaktoo-bangkit2024',
                'repo_links' => [],
                'bullets' => [
                    'Integrated Speech-to-Text and NLP scoring logic for pronunciation feedback.',
                    'Built authentication and cloud sync with Firebase Authentication and Firestore.',
                    'Designed modular UI components for maintainability and future feature growth.',
                ],
            ],
            [
                'title' => 'AWIKWOK Link Shortener',
                'type' => 'Frontend Web Application',
                'description' => 'Developed a short-link management platform with Vue.js, Vue Router, Firebase Authentication, and Firestore storage.',
                'outcome' => 'Applied URL validation and restricted redirect handling to reduce malicious input risk and support safer short-link generation.',
                'tags' => ['Vue.js', 'Firebase', 'Firestore', 'Authentication', 'Security'],
                'year' => '2024',
                'status' => 'Web project',
                'role' => 'Frontend Developer',
                'image' => 'images/project-short-link-logo.png',
                'image_alt' => 'AWK link shortener logo',
                'image_credit' => 'Project asset',
                'image_fit' => 'contain',
                'repo_url' => 'https://github.com/ShinjiTakeru00/Short_Link_FP_Pemweb',
                'repo_links' => [],
                'bullets' => [
                    'Built reusable frontend components and route-based navigation.',
                    'Connected Firebase services for secure link storage and access control.',
                    'Implemented input validation for safer redirect behavior.',
                ],
            ],
            [
                'title' => 'Network Simulation and Routing Labs',
                'type' => 'Networking / Academic Projects',
                'description' => 'Designed and configured subnetting, static routing, OSPF, VLAN segmentation, and multi-router network scenarios.',
                'outcome' => 'Tested topologies and troubleshooting workflows using Cisco Packet Tracer and Wireshark, then analyzed traffic patterns to optimize routing performance.',
                'tags' => ['TCP/IP', 'OSPF', 'VLAN', 'Wireshark', 'Cisco Packet Tracer'],
                'year' => '2023',
                'status' => 'Academic labs',
                'role' => 'Network Engineer',
                'image' => 'images/project-network.jpg',
                'image_alt' => 'Server racks and network cabling representing routing and infrastructure labs',
                'image_credit' => 'Representative image: Rawpixel / Public Domain',
                'image_fit' => 'cover',
                'repo_url' => 'https://github.com/ShinjiTakeru00/Jarkom-Modul-5-IT16',
                'repo_links' => [
                    ['label' => 'Module 1', 'url' => 'https://github.com/ShinjiTakeru00/Jarkom-Modul-1-IT16-2023'],
                    ['label' => 'Module 2', 'url' => 'https://github.com/ShinjiTakeru00/Jarkom-Modul-2-IT16-2023'],
                    ['label' => 'Module 3', 'url' => 'https://github.com/ShinjiTakeru00/Jarkom-Modul-3-IT16-2023'],
                    ['label' => 'Module 4', 'url' => 'https://github.com/ShinjiTakeru00/Jarkom-Modul-4-IT16-2023'],
                    ['label' => 'Module 5', 'url' => 'https://github.com/ShinjiTakeru00/Jarkom-Modul-5-IT16'],
                ],
                'bullets' => [
                    'Configured routing and segmentation across multi-router scenarios.',
                    'Troubleshot packet flow and network behavior with Wireshark.',
                    'Documented topology decisions and performance observations.',
                ],
            ],
            [
                'title' => 'Quantum Computing Notebook',
                'type' => 'Academic Computing',
                'description' => 'Explored quantum computing concepts and exercises through Jupyter Notebook-based coursework.',
                'outcome' => 'Created an academic notebook repository for experimenting with quantum computing foundations and computational exercises.',
                'tags' => ['Jupyter Notebook', 'Quantum Computing', 'Academic Project'],
                'year' => '2024',
                'status' => 'Coursework repository',
                'role' => 'Notebook Author',
                'image' => 'images/project-quantum.jpg',
                'image_alt' => 'Abstract quantum atom visualization representing quantum computing coursework',
                'image_credit' => 'Representative image: Rawpixel / Public Domain',
                'image_fit' => 'cover',
                'repo_url' => 'https://github.com/ShinjiTakeru00/QuantumComputing',
                'repo_links' => [],
                'bullets' => [
                    'Organized quantum computing practice work in a reproducible notebook format.',
                    'Used notebook-based exploration for technical documentation and experimentation.',
                    'Maintained the project as a public academic reference on GitHub.',
                ],
            ],
            [
                'title' => 'Pemrograman Integratif',
                'type' => 'Python / Integrative Programming',
                'description' => 'A Python coursework repository for integrative programming practice and implementation exercises.',
                'outcome' => 'Built a public record of Python-based coursework that supports the software engineering side of the portfolio.',
                'tags' => ['Python', 'Programming', 'Coursework'],
                'year' => '2023',
                'status' => 'Coursework repository',
                'role' => 'Python Developer',
                'image' => 'images/project-code.jpg',
                'image_alt' => 'Code editor close-up representing Python programming coursework',
                'image_credit' => 'Representative image: Rawpixel / Public Domain',
                'image_fit' => 'cover',
                'repo_url' => 'https://github.com/ShinjiTakeru00/Pemrograman-Integratif',
                'repo_links' => [],
                'bullets' => [
                    'Practiced Python implementation patterns in an academic setting.',
                    'Maintained code examples as part of integrative programming coursework.',
                    'Added a public GitHub artifact that complements security and networking work.',
                ],
            ],
        ],
        'githubRepos' => [
            ['name' => 'speaktoo-bangkit2024', 'description' => 'Bangkit Academy capstone project for English pronunciation learning.', 'language' => 'Kotlin, JavaScript, Python', 'url' => 'https://github.com/ShinjiTakeru00/speaktoo-bangkit2024'],
            ['name' => 'Short_Link_FP_Pemweb', 'description' => 'Vue short-link management project with account-based link storage.', 'language' => 'Vue, JavaScript, CSS', 'url' => 'https://github.com/ShinjiTakeru00/Short_Link_FP_Pemweb'],
            ['name' => 'Jarkom-Modul-1-IT16-2023', 'description' => 'Computer networking practicum covering packet analysis and FTP traffic investigation.', 'language' => 'Networking documentation', 'url' => 'https://github.com/ShinjiTakeru00/Jarkom-Modul-1-IT16-2023'],
            ['name' => 'Jarkom-Modul-2-IT16-2023', 'description' => 'Networking practicum with DNS, NAT, load balancer, and web server topology work.', 'language' => 'Networking documentation', 'url' => 'https://github.com/ShinjiTakeru00/Jarkom-Modul-2-IT16-2023'],
            ['name' => 'Jarkom-Modul-3-IT16-2023', 'description' => 'Networking practicum documentation for server and infrastructure configuration exercises.', 'language' => 'Networking documentation', 'url' => 'https://github.com/ShinjiTakeru00/Jarkom-Modul-3-IT16-2023'],
            ['name' => 'Jarkom-Modul-4-IT16-2023', 'description' => 'VLSM and CIDR routing topology practicum with subnet planning.', 'language' => 'Networking documentation', 'url' => 'https://github.com/ShinjiTakeru00/Jarkom-Modul-4-IT16-2023'],
            ['name' => 'Jarkom-Modul-5-IT16', 'description' => 'Advanced networking practicum with VLSM topology, subnetting, and Linux network configuration.', 'language' => 'Networking documentation', 'url' => 'https://github.com/ShinjiTakeru00/Jarkom-Modul-5-IT16'],
            ['name' => 'QuantumComputing', 'description' => 'Jupyter Notebook repository for quantum computing coursework.', 'language' => 'Jupyter Notebook', 'url' => 'https://github.com/ShinjiTakeru00/QuantumComputing'],
            ['name' => 'Pemrograman-Integratif', 'description' => 'Python coursework for integrative programming exercises.', 'language' => 'Python', 'url' => 'https://github.com/ShinjiTakeru00/Pemrograman-Integratif'],
            ['name' => 'Strukdat', 'description' => 'C++ data structures coursework repository.', 'language' => 'C++', 'url' => 'https://github.com/ShinjiTakeru00/Strukdat'],
            ['name' => 'BotKripto', 'description' => 'Early cryptocurrency bot experiment repository.', 'language' => 'Project archive', 'url' => 'https://github.com/ShinjiTakeru00/BotKripto'],
            ['name' => 'iTorrent', 'description' => 'Forked iOS torrent client repository kept in the GitHub archive.', 'language' => 'Repository archive', 'url' => 'https://github.com/ShinjiTakeru00/iTorrent'],
        ],
        'skills' => [
            'Mobile Development', 'Web Development', 'Networking', 'Technical Analysis', 'Project Leadership',
        ],
        'certificates' => [
            [
                'title' => 'Belajar Membuat Aplikasi Android untuk Pemula',
                'issuer' => 'Dicoding Indonesia',
                'focus' => 'Android starter development and application fundamentals',
                'date' => '2024',
                'image' => 'images/certificates/android-pemula.png',
                'pdf' => 'images/Certificate/Android Pemula.pdf',
                'tags' => ['Android', 'Mobile', 'Beginner'],
            ],
            [
                'title' => 'Belajar Pengembangan Aplikasi Android Intermediate',
                'issuer' => 'Dicoding Indonesia',
                'focus' => 'Android intermediate development',
                'date' => 'June 2024',
                'image' => 'images/certificates/android-intermediate.png',
                'pdf' => 'images/Certificate/Peengembangan Aplikasi Android Intermediate.pdf',
                'tags' => ['Android', 'Kotlin', 'Mobile'],
            ],
            [
                'title' => 'Belajar Fundamental Aplikasi Android',
                'issuer' => 'Dicoding Indonesia',
                'focus' => 'Android fundamentals and app architecture',
                'date' => 'May 2024',
                'image' => 'images/certificates/android-fundamental.png',
                'pdf' => 'images/Certificate/Fundamental Android.pdf',
                'tags' => ['Android', 'UI', 'Architecture'],
            ],
            [
                'title' => 'Belajar Machine Learning untuk Android',
                'issuer' => 'Dicoding Indonesia',
                'focus' => 'Machine learning concepts applied to Android products',
                'date' => '2024',
                'image' => 'images/certificates/machine-learning-android.png',
                'pdf' => 'images/Certificate/machine learning Android.pdf',
                'tags' => ['Android', 'Machine Learning', 'Mobile'],
            ],
            [
                'title' => 'Memulai Pemrograman Dengan Kotlin',
                'issuer' => 'Dicoding Indonesia',
                'focus' => 'Kotlin programming foundation',
                'date' => '2024',
                'image' => 'images/certificates/kotlin.png',
                'pdf' => 'images/Certificate/Pemrograman Kotlin.pdf',
                'tags' => ['Kotlin', 'OOP', 'Mobile'],
            ],
            [
                'title' => 'Belajar Prinsip Pemrograman SOLID',
                'issuer' => 'Dicoding Indonesia',
                'focus' => 'Clean code and maintainable design',
                'date' => '2024',
                'image' => 'images/certificates/solid.png',
                'pdf' => 'images/Certificate/Pemrograman SOLID.pdf',
                'tags' => ['SOLID', 'Clean Code', 'Design'],
            ],
            [
                'title' => 'Memulai Dasar Pemrograman untuk Menjadi Pengembang Software',
                'issuer' => 'Dicoding Indonesia',
                'focus' => 'Software development foundation and programming mindset',
                'date' => '2024',
                'image' => 'images/certificates/dasar-pemrograman.png',
                'pdf' => 'images/Certificate/Mulai Dasar Pemrograman.pdf',
                'tags' => ['Programming', 'Software', 'Foundation'],
            ],
            [
                'title' => 'Logic 101',
                'issuer' => 'Dicoding Indonesia',
                'focus' => 'Logic fundamentals for structured problem solving',
                'date' => '2024',
                'image' => 'images/certificates/logic-101.png',
                'pdf' => 'images/Certificate/Logic 101.pdf',
                'tags' => ['Logic', 'Problem Solving', 'Foundation'],
            ],
            [
                'title' => 'Belajar Dasar Git dengan GitHub',
                'issuer' => 'Dicoding Indonesia',
                'focus' => 'Version control and GitHub workflow',
                'date' => '2024',
                'image' => 'images/certificates/git.png',
                'pdf' => 'images/Certificate/Belajar Git.pdf',
                'tags' => ['Git', 'GitHub', 'Workflow'],
            ],
            [
                'title' => 'Belajar Dasar AI',
                'issuer' => 'Dicoding Indonesia',
                'focus' => 'Artificial intelligence concepts and applied foundations',
                'date' => '2024',
                'image' => 'images/certificates/dasar-ai.png',
                'pdf' => 'images/Certificate/Dasar AI.pdf',
                'tags' => ['AI', 'Foundation', 'Technology'],
            ],
            [
                'title' => 'Cybersecurity Foundations',
                'issuer' => 'LinkedIn Learning',
                'focus' => 'Cybersecurity concepts, risk thinking, and security fundamentals',
                'date' => 'June 2026',
                'image' => 'images/certificates/cybersecurity-foundations.png',
                'pdf' => 'images/Certificate/CertificateOfCompletion_Cybersecurity Foundations.pdf',
                'tags' => ['Cybersecurity', 'Risk', 'Security'],
            ],
        ],
        'cvSkills' => [
            [
                'title' => 'Cyber Security',
                'items' => ['Digital Forensics', 'Evidence Acquisition', 'Chain of Custody', 'Hash Validation', 'Artifact Extraction', 'ADB Forensics', 'Timeline Analysis', 'Incident Documentation', 'NIST SP 800-86'],
            ],
            [
                'title' => 'Forensic Tools',
                'items' => ['Cellebrite UFED', 'Cellebrite Physical Analyzer', 'Autopsy', 'FTK Imager', 'EnCase', 'Magnet AXIOM'],
            ],
            [
                'title' => 'Security & Networking',
                'items' => ['TCP/IP', 'Subnetting', 'OSPF Routing', 'VLAN', 'NAT', 'Firewall Concepts', 'Wireshark', 'Linux System Administration'],
            ],
            [
                'title' => 'Programming & Scripting',
                'items' => ['Python', 'Kotlin', 'Java', 'JavaScript', 'Shell Script'],
            ],
            [
                'title' => 'Software & Web Development',
                'items' => ['Vue.js', 'Firebase', 'REST API Integration', 'MVVM Android', 'UI/UX XML Layouting', 'Postman API Testing'],
            ],
            [
                'title' => 'Databases & Cloud',
                'items' => ['Firebase Firestore', 'MySQL', 'SQL Querying', 'Google Cloud Platform Foundations'],
            ],
            [
                'title' => 'Tools & Platforms',
                'items' => ['Git', 'GitHub', 'VirtualBox', 'Cisco Packet Tracer', 'Notion', 'Figma', 'Jira'],
            ],
            [
                'title' => 'Soft Skills',
                'items' => ['Analytical Reasoning', 'Problem Solving', 'Technical Reporting', 'Investigation Mindset', 'Team Collaboration', 'Leadership'],
            ],
        ],
        'skillGroups' => [
            [
                'title' => 'Mobile Application Development',
                'summary' => 'Android application work from Bangkit Academy with clean architecture, cloud integration, and team delivery.',
                'image' => 'images/Speaktoo.png',
                'image_alt' => 'Speaktoo logo representing mobile application development',
                'image_fit' => 'contain',
                'items' => ['Kotlin', 'MVVM Android', 'Firebase Authentication', 'Firestore', 'Google Cloud Speech API', 'REST API Integration'],
                'types' => [
                    [
                        'name' => 'Android App Architecture',
                        'detail' => 'Build maintainable Android flows using Kotlin, OOP, MVVM, modular UI structure, and clean separation between view, data, and logic.',
                        'tools' => ['Kotlin', 'MVVM', 'OOP', 'Android Studio', 'Git'],
                    ],
                    [
                        'name' => 'Cloud-Connected Mobile Features',
                        'detail' => 'Connect mobile experiences to authentication, database, and cloud services for account-based app behavior.',
                        'tools' => ['Firebase Auth', 'Firestore', 'Google Cloud', 'REST API'],
                    ],
                    [
                        'name' => 'Speech and Learning Product Features',
                        'detail' => 'Implement speech-driven app features with scoring, feedback loops, and product logic for learning experiences.',
                        'tools' => ['Speech API', 'NLP Scoring', 'UX Flow', 'Testing'],
                    ],
                ],
            ],
            [
                'title' => 'Web & Frontend Engineering',
                'summary' => 'Frontend implementation for practical web products, including routing, account-based flows, and API-backed interfaces.',
                'image' => 'images/capability-web-frontend.png',
                'image_alt' => 'Screenshot of this portfolio website representing frontend engineering work',
                'image_fit' => 'cover',
                'items' => ['Vue.js', 'JavaScript', 'HTML', 'CSS', 'Firebase', 'URL Validation', 'Component Architecture'],
                'types' => [
                    [
                        'name' => 'Frontend Interface Development',
                        'detail' => 'Create responsive web interfaces with reusable components, clear navigation, and maintainable styling.',
                        'tools' => ['Vue.js', 'JavaScript', 'HTML', 'CSS', 'Tailwind CSS'],
                    ],
                    [
                        'name' => 'Auth and Data-Backed Web Apps',
                        'detail' => 'Build account-based workflows that connect frontend routes to authentication and cloud-hosted data.',
                        'tools' => ['Firebase Auth', 'Firestore', 'Vue Router', 'State Flow'],
                    ],
                    [
                        'name' => 'Validation and Safe User Input',
                        'detail' => 'Add practical validation for forms, URLs, redirects, and user-generated inputs before they reach storage or navigation logic.',
                        'tools' => ['URL Validation', 'Form Logic', 'Redirect Rules', 'Testing'],
                    ],
                ],
            ],
            [
                'title' => 'Networking & Infrastructure',
                'summary' => 'Academic network architecture labs covering routing, subnet planning, topology testing, and troubleshooting.',
                'image' => 'images/project-network.jpg',
                'image_alt' => 'Server rack and network cabling representing networking capability',
                'image_fit' => 'cover',
                'items' => ['TCP/IP', 'Subnetting', 'OSPF Routing', 'VLAN', 'NAT', 'Wireshark', 'Cisco Packet Tracer', 'Linux Configuration'],
                'types' => [
                    [
                        'name' => 'Network Design and Subnet Planning',
                        'detail' => 'Plan network topologies with subnet allocation, VLSM/CIDR decisions, and address-space documentation.',
                        'tools' => ['TCP/IP', 'Subnetting', 'VLSM', 'CIDR'],
                    ],
                    [
                        'name' => 'Routing and Service Configuration',
                        'detail' => 'Configure routing and infrastructure scenarios across multi-router and Linux-based lab environments.',
                        'tools' => ['OSPF', 'Static Routing', 'NAT', 'DNS', 'Linux'],
                    ],
                    [
                        'name' => 'Troubleshooting and Packet Analysis',
                        'detail' => 'Inspect traffic behavior, identify configuration issues, and document root causes with lab evidence.',
                        'tools' => ['Wireshark', 'Packet Tracer', 'Ping/Traceroute', 'Log Review'],
                    ],
                ],
            ],
            [
                'title' => 'Technical Analysis & Documentation',
                'summary' => 'Structured investigation, reporting, evidence-minded thinking, and clear technical documentation for project handoff.',
                'image' => 'images/project-code.jpg',
                'image_alt' => 'Code close-up representing technical analysis and documentation',
                'image_fit' => 'cover',
                'items' => ['Problem Analysis', 'Technical Reporting', 'Digital Forensics Basics', 'NIST SP 800-86', 'Timeline Analysis', 'Postman API Testing'],
                'types' => [
                    [
                        'name' => 'Structured Technical Investigation',
                        'detail' => 'Break unclear technical problems into evidence, workflow, timeline, and finding sections.',
                        'tools' => ['Problem Framing', 'Timeline Analysis', 'Root Cause Notes'],
                    ],
                    [
                        'name' => 'API and System Validation',
                        'detail' => 'Check whether system behavior matches requirements using request testing, result comparison, and repeatable notes.',
                        'tools' => ['Postman', 'API Testing', 'Test Cases', 'Result Logs'],
                    ],
                    [
                        'name' => 'Documentation and Reporting',
                        'detail' => 'Turn project work into readable reports, handoff notes, SOPs, and evidence-backed summaries.',
                        'tools' => ['Technical Writing', 'SOPs', 'Research Reports', 'NIST SP 800-86'],
                    ],
                ],
            ],
            [
                'title' => 'Team & Project Coordination',
                'summary' => 'Leadership experience from HMIT, BEM FTEIC ITS, and ARA, focused on systems, training, delegation, and execution.',
                'image' => null,
                'image_alt' => null,
                'image_fit' => 'cover',
                'items' => ['Agile Collaboration', 'Git Workflow', 'Program Planning', 'Performance Dashboards', 'SOP Documentation', 'Stakeholder Coordination'],
                'types' => [
                    [
                        'name' => 'Agile and Git-Based Team Delivery',
                        'detail' => 'Coordinate tasks, branches, communication, and iterative delivery across student and capstone teams.',
                        'tools' => ['Agile Scrum', 'Git Workflow', 'Task Breakdown', 'Review'],
                    ],
                    [
                        'name' => 'People Operations and Training Systems',
                        'detail' => 'Design regeneration, leadership, onboarding, and development programs with measurable follow-up.',
                        'tools' => ['Talent Mapping', 'Training Design', 'Mentoring', 'Evaluation'],
                    ],
                    [
                        'name' => 'Operational Planning and Execution',
                        'detail' => 'Manage events, resources, vendors, committee work, SOPs, and dashboards for large participant programs.',
                        'tools' => ['Program Planning', 'Dashboards', 'Vendor Coordination', 'SOPs'],
                    ],
                ],
            ],
        ],
        'timeline' => [
            ['year' => '2025', 'title' => 'Bachelors Degree in Information Technology', 'detail' => 'Graduated from Institut Teknologi Sepuluh Nopember with GPA 3.55/4.00 and a thesis on NIST-based Android forensic investigation validation.'],
            ['year' => '2024', 'title' => 'Bangkit Academy Mobile Developer Cohort', 'detail' => 'Completed Android development, clean architecture, REST API, Firebase, GCP foundations, Agile, and leadership training.'],
            ['year' => '2023 - 2024', 'title' => 'Head of Human Resource Development, HMIT ITS', 'detail' => 'Led HR development for 60+ members in the first term and 80+ members in the second term, improving retention and coordination through structured HR systems.'],
        ],
        'experiences' => [
            [
                'organization' => 'Himpunan Mahasiswa Teknologi Informasi ITS (HMIT)',
                'role' => 'Head of Human Resource Development (2 Terms)',
                'period' => 'Feb 2023 - Nov 2024',
                'details' => [
                    'Led HR development initiatives for 60+ members in term one and 80+ members in term two with 7-8 HR staff.',
                    'Directed DECLARE 3.0, DECLARE 4.0, and IT BOOST to strengthen regeneration, career preparation, and member development.',
                    'Implemented performance evaluation dashboards, onboarding systems, talent mapping, HR database documentation, and SOP standardization.',
                ],
            ],
            [
                'organization' => 'BEM FTEIC ITS',
                'role' => 'Managerial Trainer',
                'period' => 'May 2023 - Sep 2024',
                'details' => [
                    'Facilitated leadership and organizational development training for 600+ participants across intensive learning sessions.',
                    'Mentored 40-50 participants in advanced leadership training and team coordination modules.',
                    'Managed PPLKM IV FTEIC as project manager with 35 committee members for an 80-participant leadership program.',
                ],
            ],
            [
                'organization' => 'A Renewal Agent 3.0 (ARA)',
                'role' => 'Expert Staff of Equipment',
                'period' => 'Oct 2022 - May 2023',
                'details' => [
                    'Coordinated logistics and technical operations for a university-scale event with 500+ participants.',
                    'Managed vendor relationships across five external partners.',
                    'Improved setup efficiency through equipment scheduling and resource allocation.',
                ],
            ],
        ],
        'education' => [
            [
                'school' => 'Institut Teknologi Sepuluh Nopember',
                'degree' => 'Bachelor of Information Technology',
                'period' => 'Aug 2021 - Sep 2025',
                'detail' => 'GPA 3.55/4.00. Relevant courses include Cyber Security, Cloud Computing Technology, IT Project Management, and Artificial Intelligence.',
            ],
            [
                'school' => 'Bangkit Academy by Google, GoTo, Traveloka',
                'degree' => 'Mobile Developer Cohort',
                'period' => 'Feb 2024 - Jul 2024',
                'detail' => 'Studied Android development with Kotlin, OOP, MVVM clean architecture, REST API and Firebase integration, GCP foundations, Agile, product, and professional communication.',
            ],
        ],
        'principles' => [
            ['title' => 'Structured problem solver', 'detail' => 'Comfortable breaking technical problems into systems, workflows, artifacts, and measurable next steps.'],
            ['title' => 'Security-aware builder', 'detail' => 'Brings security awareness into software and networking work without making every project security-only.'],
            ['title' => 'Leadership through systems', 'detail' => 'Uses structured evaluation, dashboards, SOPs, and clear coordination to improve team execution.'],
        ],
        'services' => [
            'Mobile and web application development',
            'Network simulation, routing, and troubleshooting',
            'Technical documentation and analysis',
            'Security-aware implementation and testing',
        ],
        'languages' => [
            'Indonesian (Native)',
            'English (Professional Proficiency)',
        ],
    ];
};

Route::get('/', function () use ($portfolioData) {
    ['profile' => $profile, 'projects' => $projects, 'skillGroups' => $skillGroups, 'timeline' => $timeline, 'certificates' => $certificates] = $portfolioData();

    return view('portfolio', compact('profile', 'projects', 'skillGroups', 'timeline', 'certificates'));
})->name('home');

Route::post('/contact', [ContactMessageController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('contact.store');

Route::get('/about', function () use ($portfolioData) {
    [
        'profile' => $profile,
        'skills' => $skills,
        'skillGroups' => $skillGroups,
        'timeline' => $timeline,
        'principles' => $principles,
        'services' => $services,
        'experiences' => $experiences,
        'education' => $education,
        'languages' => $languages,
        'certificates' => $certificates,
    ] = $portfolioData();

    return view('about', compact('profile', 'skills', 'skillGroups', 'timeline', 'principles', 'services', 'experiences', 'education', 'languages', 'certificates'));
})->name('about');

Route::get('/projects', function () use ($portfolioData) {
    ['profile' => $profile, 'projects' => $projects, 'githubRepos' => $githubRepos] = $portfolioData();

    return view('projects', compact('profile', 'projects', 'githubRepos'));
})->name('projects');

Route::get('/certificates', function () use ($portfolioData) {
    ['profile' => $profile, 'certificates' => $certificates, 'cvSkills' => $cvSkills] = $portfolioData();

    return view('certificates', compact('profile', 'certificates', 'cvSkills'));
})->name('certificates');

Route::get('/backend/status', function () use ($portfolioData) {
    $data = $portfolioData();

    return response()->json([
        'status' => 'ok',
        'backend' => 'Laravel',
        'storage' => [
            'contact_messages' => ContactMessage::count(),
        ],
        'content' => [
            'projects' => count($data['projects']),
            'capability_groups' => count($data['skillGroups']),
            'github_repositories' => count($data['githubRepos']),
        ],
    ]);
})->name('backend.status');
