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
        'url' => 'packages.php',
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
        'url' => 'contacts.php',
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
        background: #fdfdfd;
        min-height: 60vh;
    }
    .search-header {
        margin-bottom: 50px;
        text-align: center;
    }
    .search-header h1 {
        font-size: 36px;
        font-weight: 800;
        margin-bottom: 10px;
    }
    .search-header p {
        color: #666;
        font-size: 18px;
    }
    .result-card {
        background: #fff;
        border-radius: 15px;
        padding: 30px;
        margin-bottom: 25px;
        border: 1px solid #eee;
        transition: all 0.3s ease;
        display: block;
        text-decoration: none !important;
        color: inherit !important;
    }
    .result-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.05);
        border-color: #fede00;
    }
    .result-category {
        display: inline-block;
        background: rgba(254, 222, 0, 0.1);
        color: #bfa500;
        padding: 4px 12px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 15px;
    }
    .result-title {
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 10px;
        color: #111;
    }
    .result-desc {
        color: #666;
        line-height: 1.6;
        margin-bottom: 0;
    }
    .no-results {
        text-align: center;
        padding: 50px;
    }
    .no-results i {
        font-size: 60px;
        color: #ddd;
        margin-bottom: 20px;
        display: block;
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
