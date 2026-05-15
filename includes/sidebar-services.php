<?php $current_page = basename($_SERVER['PHP_SELF']); ?>
<div class="block-aside-wrapper sticky-sidebar">
    <!-- Sidebar Navigation -->
    <div class="block-aside">
        <h4 class="block-aside__title">Repair Services</h4>
        <ul class="category-list service-nav">
            <li class="<?php echo ($current_page == 'service-brake-repair.php') ? 'active' : ''; ?>"><a href="service/brake-repair">Brake Repair</a></li>
            <li class="<?php echo ($current_page == 'service-engine.php') ? 'active' : ''; ?>"><a href="service/engine">Engine Services</a></li>
            <li class="<?php echo ($current_page == 'service-transmission.php') ? 'active' : ''; ?>"><a href="service/transmission">Transmission Repair</a></li>
            <li class="<?php echo ($current_page == 'service-preventative-maintenance.php') ? 'active' : ''; ?>"><a href="service/preventative-maintenance">Maintenance</a></li>
            <li class="<?php echo ($current_page == 'service-tires-wheels.php') ? 'active' : ''; ?>"><a href="service/tires-wheels">Tires & Wheels</a></li>
            <li class="<?php echo ($current_page == 'service-exhaust-system.php') ? 'active' : ''; ?>"><a href="service/exhaust-system">Exhaust System</a></li>
        </ul>
    </div>
</div>
