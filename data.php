<?php

// --- General Page Data ---
$page_config = [
    'title' => 'Best Team Project #5',
    'favicon_url' => './Gallery\favicon-32x32.png',
    'logo_url' => './Gallery\Screenshot 2025-05-14 190425.png',
    'logo_alt' => 'Team #5',
    'home_link' => './index.php',
];

// --- Navigation ---
$nav_items = [
    ['text' => 'About', 'url' => '#about'],
    ['text' => 'Services', 'url' => '#services'], 
    ['text' => 'Projects', 'url' => '#journal'],   
    ['text' => 'Contact', 'url' => '#contact'],  
];

$cta_button = [
    'text' => " Log in ",
    'url' => '#contact-form', 
];

// --- Intro Section ---
$intro_section_data = [
    'greeting' => "Welcome to Best Team Project #5",
    'headline' => "At the heart of every successful project is a team of Professional and dedicated developers",
    'scroll_target_id' => "about",
    'scroll_text' => "Scroll for more",
    'main_image_url' => "./Gallery/123456.png",
    'main_image_alt' => "Team #5",
    'background_image_url' => "./Gallery\geometric_shape.svg",
    'background_image_alt' => "geometric_shape",
];

// --- About Section ---
$about_section_data = [
    'pre_title' => 'About',
    'title' => 'Who we are',
    'more_about_me_link_text' => 'More About Team #5',
    'more_about_me_link_url' => '#', 
    'paragraphs' => [
        "We are more than just coders—we are creators and problem-solvers who focus on bringing your vision to life. From the first line of code to the final product, we approach every project with meticulous attention to detail, ensuring it’s both functional and user-friendly. Whether we’re building an intuitive app or a complex system, we strive for efficiency, scalability, and security.",
    ],
    'social_links' => [
        ['icon_class' => 'fa-brands fa-square-facebook', 'url' => '#0'],
        ['icon_class' => 'fa-brands fa-twitter', 'url' => '#0'],
        ['icon_class' => 'fa-brands fa-instagram', 'url' => '#0'],
        ['icon_class' => 'fa-solid fa-basketball', 'url' => '#0'],
    ],
];

// --- Expertise Section ---
$expertise_section_data = [
    'pre_title' => 'We Offer',
    'title' => 'Team #5 Expertise & Skills:',
    'main_text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum suscipit debitis quam dignissimos veritatis atque pariatur magnam obcaecati fugit reprehenderit vel numquam facere esse est deserunt, perferendis commodi voluptatem similique.',
    'view_all_link_text' => 'View All Services',
    'view_all_link_url' => '#', 
    'items' => [
        [
            'title' => 'Full-Stack Development:',
            'text' => 'From front-end design to back-end architecture, we have the experience and versatility to handle projects from start to finish.'
        ],
        [
            'title' => 'Agile Development:',
            'text' => 'We believe in delivering results in short, iterative cycles. With agile methodologies, we can quickly adapt to changing requirements and always stay on top of evolving trends.'
        ],
        [
            'title' => 'Tech Stack Mastery:',
            'text' => 'Whether it’s React, Node.js, Python, Ruby on Rails, or any other framework or language, our developers are well-versed in the latest technologies to build scalable and efficient applications.'
        ],
        [
            'title' => 'DevOps & CI/CD: ',
            'text' => 'Automation and smooth deployment pipelines are essential for speed and efficiency. We focus on continuous integration, testing, and seamless delivery.
'
        ],
    ]
];

// --- Clients Section ---
$clients_section_data = [
    'pre_title' => 'Project types we create:',
    'title' => 'Development teams work on a wide range of projects, each with its own unique challenges, goals, and technologies.',
    'paragraphs' => [
        "Web Applications: The software programs that run on web browsers. Mobile Applications: Designed to run on smartphones and tablets. Enterprise Software: Designed to meet the needs of large organizations. Cloud-Based Systems: Applications and services are hosted in the cloud rather than on local servers or devices. AI/ML: projects involve building systems that can learn from data and make predictions, classifications, or decisions.  Game Development: involves creating interactive entertainment, from mobile games to high-end PC and console games.", 
    ],
    // 'paragraphs' => [
    //    "Enterprise Software: Enterprise software is designed to meet the needs of large organizations. These systems are usually complex, involving multiple modules to manage business functions like HR, inventory, finance, and customer relationship management (CRM).",
    //     "Cloud-Based Systems: Applications and services are hosted in the cloud rather than on local servers or devices. These projects often involve building scalable, distributed systems that can handle large amounts of data and users.",
    //     "AI and Machine Learning Projects: AI/ML projects involve building systems that can learn from data and make predictions, classifications, or decisions. These projects require deep technical expertise in statistics, algorithms, and data processing.",
    //     "Game Development: Game development involves creating interactive entertainment, from mobile games to high-end PC and console games. Game development teams typically use game engines and need to focus on graphics, gameplay, and performance optimization.", 
    // ],

    'logos' => [
        ['src' => './Gallery\flash.svg', 'alt' => 'flash', 'url' => '#'],
        ['src' => './Gallery\rise.svg', 'alt' => 'rise', 'url' => '#'],
        ['src' => './Gallery\cactus.svg', 'alt' => 'cactus', 'url' => '#'],
        ['src' => './Gallery\pinpoint.svg', 'alt' => 'pinpoint', 'url' => '#'],
        ['src' => './Gallery\proline.svg', 'alt' => 'proline', 'url' => '#'],
        ['src' => './Gallery\vision.svg', 'alt' => 'vision', 'url' => '#'],
        ['src' => './Gallery\volume.svg', 'alt' => 'volume', 'url' => '#'],
        ['src' => './Gallery\hitech.svg', 'alt' => 'hitech', 'url' => '#'],
        ['src' => './Gallery\terra.svg', 'alt' => 'terra', 'url' => '#'],
        ['src' => './Gallery\chain.svg', 'alt' => 'chain', 'url' => '#'],
    ]
];

// --- Testimonials Section ---
$testimonials_data = [
   
    [
        'text' => '
Frontend Developers: These developers focus on creating the parts of the application that users interact with, typically using technologies like HTML, CSS, JavaScript, and frontend frameworks like React, Angular, or Vue.',
    ],
    [
        'text' => 'Backend Developers: They work on the server-side of the application, developing APIs, databases, business logic, and ensuring the system functions smoothly. Technologies include Node.js, Python, Ruby, Java, etc.',
    
    ],
    [
        'text' => 'Full-stack Developers: Some developers are skilled in both frontend and backend development and are known as full-stack developers. They can work on the entire application, ensuring everything integrates well together.',
    ],
    [
        'text' => 'Mobile Developers: For apps intended for mobile devices, these developers focus on creating applications for platforms like iOS (Swift, Objective-C) and Android (Kotlin, Java).',
    ],
];

// --- Get Started Section ---
$get_started_section_data = [
    'title' => 'Get started with us today.',
    'text' => 'Developer team is made up of individuals with different technical and functional skills, working together toward a common goal: building software that meets the needs of users and stakeholders. Effective collaboration, clear communication, and the right mix of technical expertise are key to the success of the team.',
    'button_text' => "Log in",
    'button_url' => '#',
];

// --- Recent Articles Section ---
$recent_articles_section_data = [
    'pre_title' => 'Recent Articles',
    'title' => 'Latest articles from my blog.',
    'articles' => [
        [
            'tag' => 'Sponsored',
            'tag_link' => '#',
            'title' => 'Need Web Hosting for Your Websites?',
            'title_link' => '#',
            'content_html' => 'Need hosting for your website? We would highly recommend <a href="#"><span>DreamHost.</span></a> Enjoy 100% in-house support, guaranteed performance and uptime, 1-click installs, and a super-intuitive control panel to make managing your websites and projects easy. <a href="#"><span>Sign up</span></a> now to get started.'
        ],
        [
            'tag' => 'Productivity',
            'tag_link' => '#',
            'title' => '5 Marketing Productivity Apps for Your Team',
            'title_link' => '#',
            'content_html' => 'Rerum quam quos. Quibusdam quis autem voluptatibus earum vel ex error ea magni. Aut asperiores sit mollitia. Rem neque et voluptatem eos quia sed eligendi et. Eaque velit eligendi ut magnam. Cumque ducimus laborum doloribus facere maxime vel earum quidem enim suscipit.'
        ],
        [
            'tag' => 'SEO',
            'tag_link' => '#',
            'title' => '7 SEO Factors to Consider for Better Website Ranking',
            'title_link' => '#',
            'content_html' => 'Quibusdam quis autem voluptatibus earum vel ex error ea magni. Rerum quam quos. Aut asperiores sit mollitia. Rem neque et voluptatem eos quia sed eligendi et. Eaque velit eligendi ut magnam. Cumque ducimus laborum doloribus facere maxime vel earum quidem enim suscipit.'
        ],
        [
            'tag' => 'Productivity',
            'tag_link' => '#',
            'title' => '5 Effective Web Design Principles',
            'title_link' => '#',
            'content_html' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum ullam et laborum aperiam. Dignissimos quae voluptatibus ullam esse sapiente fugiat, rerum labore cupiditate obcaecati dolore necessitatibus id magni rem officia dolor nam sit laudantium. Quo eaque eveniet quibusdam unde.'
        ],
    ]
];

// --- Footer Data ---
$footer_data = [
    'about_monica_title' => 'About',
    'about_monica_text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas illum quasi facere libero, fugiat laboriosam possimus reprehenderit eveniet vero voluptatum fugit ad quis veritatis suscipit beatae incidunt perferendis tempore earum hic repellendus quisquam recusandae ipsa id esse. Nobis, aut deleniti. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere ratione dignissimos.',
    'site_links_title' => 'Site Links',
    'site_links' => [
        ['text' => 'Home', 'url' => $page_config['home_link']],
        ['text' => 'Services', 'url' => '#services'],
        ['text' => 'Journal', 'url' => '#journal'],
        ['text' => 'About', 'url' => '#about'],
        ['text' => 'Contact', 'url' => '#contact'],
        ['text' => 'DreamHost', 'url' => '#'],
    ],
    'newsletter_title' => 'Newsletter',
    'newsletter_text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere ratione dignissimos.',
    'social_links' => $about_section_data['social_links'], 
    'copyright_text' => '© Copyright Monica 2022',
    'design_by_html' => 'Design by <a href="#">Team -5</a>',
    'distribution_by_html' => 'Distribution By <a href="#">Skillwill</a>',
];

?>


