<?php $current_service = basename($_SERVER['PHP_SELF']); ?>
<div class="block-aside-wrapper sticky-sidebar">
    <!-- Services Navigation -->
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
    
    <!-- Business Hours Card -->
    <div class="block-aside">
        <div class="info-hours-card">
            <h4 class="info-hours-card__title"><i class="icon icon-clock"></i> Service Hours</h4>
            <div class="divider divider-xs"></div>
            <ul class="hours-list">
                <li><span>Mon - Fri</span> <span class="time">7:00 AM - 6:00 PM</span></li>
                <li><span>Saturday</span> <span class="time">9:00 AM - 5:00 PM</span></li>
                <li class="closed"><span>Sunday</span> <span class="time text-danger">Closed</span></li>
            </ul>
        </div>
    </div>
</div>
