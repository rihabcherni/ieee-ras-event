<li id="planning" class="l-section section">
    <div class="planning">
        <?php
        $events = [
            ["08:00", "01", "Check in"],
            ["09:30", "02", "Opening Ceremony"],
            ["10:00", "03", "Conference 1: Empowering the future: IEEE RAS SAC Initiatives for student engagement and growth"],
            ["10:45", "04", "Coffee Break "],
            ["11:15", "05", "Conference 2: Empowering Transformation: The Strategic Role of PMOS in Industry 5.0"],
            ["12:00", "06", "Booth Exhibition"],
            ["13:00", "07", "Lunch Break"],
            ["14:00", "08", "Conference 3: Digital Twins Technology"],
            ["14:45", "09", "Round Table"],
            ["15:30", "10", "Awards and Closing Ceremony"]
        ];
        ?>
        <h2>Planning</h2>
        <div class="timeline">
            <div class="timeline2">
                <?php foreach ($events as $index => $event): ?>
                <div class="timeline-event" id="event<?= $index + 1 ?>">
                    <div class="event-planning">
                        <div class="event-circle"><?= $event[1] ?></div>
                        <div class="event-time"> 
                            <?= $event[2] ?>
                        </div> 
                        <?= $event[0] ?>
                    </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</li>