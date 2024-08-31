<li id="program" class="l-section section">
    <?php
    $events = [
        ["08:00 - 09:30", "01", "Check in"],
        ["09:30 - 10:30", "02", "Opening Ceremony"],
        ["10:30 - 11:30", "03", "Journey through innovation"],
        ["11:30 - 12:30", "04", "Coffee break and exhibition"],
        ["12:30 - 13:30", "05", "Cyber-Physical Systems and Digital Twins conference"],
        ["13:30 - 15:00", "06", "Lunch break"],
        ["15:00 - 16:00", "07", "Augmented Reality (AR) in Manufacturing conference"],
        ["16:00 - 17:00", "08", "Closing ceremony"]
    ];
    ?>
    
    <div class="timeline">
        <div class="timeline2">
            <?php foreach ($events as $index => $event): ?>
            <div class="timeline-event" id="event<?= $index + 1 ?>">
                <div class="event-circle"><?= $event[1] ?></div>
                <div class="event-program">
                    <div class="event-time"> <?= $event[2] ?></div> 
                    <?= $event[0] ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</li>