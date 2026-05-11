<?php
$body_class = "search-results elementor-page";
$page_title = "Search Results";
$page_description = "Search results for your inquiry at Autoshine.lk";
require_once '../includes/header.php';
require_once '../includes/navbar.php';

$query = isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '';

// Data source for search (In a real app, this would be a database)
$search_data = [
    [
        'title' => 'Preventative Maintenance',
        'url' => 'service-preventative-maintenance.php',
        'desc' => 'Routine maintenance to minimize breakdowns and extend vehicle life.',
        'category' => 'Service'
    ],
    [
        'title' => 'Brake Repair & Services',
        'url' => 'service-brake-repair.php',
        'desc' => 'Professional brake inspection, repair, and replacement services.',
        'category' => 'Service'
    ],
    [
        'title' => 'Transmission Service & Repair',
        'url' => 'service-transmission.php',
        'desc' => 'Expert transmission diagnostics and repair for smooth shifting.',
        'category' => 'Service'
    ],
    [
        'title' => 'Engine Services',
        'url' => 'service-engine.php',
        'desc' => 'Comprehensive engine diagnostics, repair, and tuning.',
        'category' => 'Service'
    ],
    [
        'title' => 'Tires & Wheels',
        'url' => 'service-tires-wheels.php',
        'desc' => 'Tire replacement, balancing, and wheel alignment services.',
        'category' => 'Service'
    ],
    [
        'title' => 'Exhaust System',
        'url' => 'service-exhaust-system.php',
        'desc' => 'Muffler and exhaust system repair and maintenance.',
        'category' => 'Service'
    ],
    [
        'title' => 'Hybrid Vehicle Service',
        'url' => 'services.php',
        'desc' => 'Specialized maintenance and repair for hybrid vehicles.',
        'category' => 'Specialty'
    ],
    [
        'title' => 'Auto Detailing',
        'url' => 'services.php',
        'desc' => 'Interior and exterior detailing for a showroom finish.',
        'category' => 'Service'
    ],
    [
        'title' => 'Mechanical Repair Packages',
        'url' => 'pricing-packages.php',
        'desc' => 'Discounted bundles for common mechanical repairs.',
        'category' => 'Packages'
    ],
    [
        'title' => 'About Autoshine',
        'url' => 'about-us.php',
        'desc' => 'Learn about our 25-year history and commitment to quality.',
        'category' => 'Company'
    ],
    [
        'title' => 'Contact Us',
        'url' => 'contact-us.php',
        'desc' => 'Get in touch with our team in Nugegoda for appointments.',
        'category' => 'Support'
    ]
];

$results = [];
if (!empty($query)) {
    foreach ($search_data as $item) {
        if (stripos($item['title'], $query) !== false || stripos($item['desc'], $query) !== false || stripos($item['category'], $query) !== false) {
            $results[] = $item;
        }
    }
}
?>

<style>
    .search-results-section {
        padding: 80px 0;
        background: url('assets/images/header-photo-bg.jpg') no-repeat center top fixed;
        background-size: cover;
        min-height: 80vh;
        position: relative;
    }
    .search-results-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.92);
        z-index: 1;
    }
    .search-results-section .container {
        position: relative;
        z-index: 2;
    }
    .search-header {
        margin-bottom: 50px;
        text-align: center;
    }
    .result-card {
        background: #fff;
        border-radius: 20px;
        padding: 35px;
        margin-bottom: 30px;
        border: 1px solid rgba(0, 0, 0, 0.05);
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        display: block;
        text-decoration: none !important;
        color: inherit !important;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
    }
    .result-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        border-color: #fede00;
    }
    .result-category {
        display: inline-block;
        background: #fede00;
        color: #000;
        padding: 5px 15px;
        border-radius: 50px;
        font-size: 11px;
        font-weight: 800;
        text-transform: uppercase;
        margin-bottom: 15px;
        letter-spacing: 0.5px;
    }
    .result-title {
        font-size: 24px;
        font-weight: 800;
        margin-bottom: 12px;
        color: #111;
        transition: color 0.3s;
    }
    .result-card:hover .result-title {
        color: #bfa500;
    }
    .result-desc {
        color: #555;
        font-size: 16px;
        line-height: 1.7;
        margin-bottom: 0;
    }
    .no-results {
        text-align: center;
        padding: 80px 40px;
        background: #fff;
        border-radius: 30px;
        box-shadow: 0 20px 50px rgba(0,0,0,0.05);
    }
    .no-results i {
        font-size: 80px;
        color: #fede00;
        margin-bottom: 25px;
        display: block;
        opacity: 0.8;
    }
</style>

<div class="page-title-wrapper" id="pageTitle">
    <div class="container">
        <h1>Search <span class="color">Results</span></h1>
    </div>
</div>

<div class="search-results-section">
    <div class="container">
        <div class="search-header">
            <p>Showing results for: <strong>"<?php echo $query; ?>"</strong></p>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <?php if (!empty($results)): ?>
                    <?php foreach ($results as $result): ?>
                        <a href="<?php echo $result['url']; ?>" class="result-card reveal-effect">
                            <span class="result-category"><?php echo $result['category']; ?></span>
                            <h3 class="result-title"><?php echo $result['title']; ?></h3>
                            <p class="result-desc"><?php echo $result['desc']; ?></p>
                        </a>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="no-results">
                        <i class="icon icon-search"></i>
                        <h3>No results found</h3>
                        <p>Sorry, we couldn't find anything matching your search. Try different keywords or browse our services.</p>
                        <div class="divider-md"></div>
                        <a href="services.php" class="btn btn-border"><span>View All Services</span></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php require_once '../includes/footer.php'; ?>
