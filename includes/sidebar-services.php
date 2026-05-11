<?php $current_service = basename($_SERVER['PHP_SELF']); ?>
<div class="block-aside-wrapper sticky-sidebar">
    <!-- Sidebar Navigation -->
    <div class="block-aside">
        <h4 class="block-aside__title">Repair Services</h4>
        <ul class="category-list service-nav">
            <li class="<?php echo ($current_service == 'service-brake-repair.php') ? 'active' : ''; ?>"><a href="service-brake-repair.php">Brake Repair</a></li>
            <li class="<?php echo ($current_service == 'service-engine.php') ? 'active' : ''; ?>"><a href="service-engine.php">Engine Services</a></li>
            <li class="<?php echo ($current_service == 'service-transmission.php') ? 'active' : ''; ?>"><a href="service-transmission.php">Transmission Repair</a></li>
            <li class="<?php echo ($current_service == 'service-preventative-maintenance.php') ? 'active' : ''; ?>"><a href="service-preventative-maintenance.php">Maintenance</a></li>
            <li class="<?php echo ($current_service == 'service-tires-wheels.php') ? 'active' : ''; ?>"><a href="service-tires-wheels.php">Tires & Wheels</a></li>
            <li class="<?php echo ($current_service == 'service-exhaust-system.php') ? 'active' : ''; ?>"><a href="service-exhaust-system.php">Exhaust System</a></li>
        </ul>
    </div>
</div>
