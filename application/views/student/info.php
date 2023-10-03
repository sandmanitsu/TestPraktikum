<div>
    <h2>Личное дело:</h2>
    <?php foreach ($student as $val): ?>
        <div class="student-info">Имя: <?php echo $val['firstname']; ?></div>
        <div class="student-info">Фамилия: <?php echo $val['lastname']; ?></div>
        <div class="student-info">Адрес: <?php echo $val['address']; ?></div>
        <div class="student-info">Телефон: <?php echo $val['phone']; ?></div>
        <div class="student-info">Дата выпуска: <?php echo $val['graduation']; ?></div>
    <? endforeach ?> 
    <a class="btn" href="/">Назад</a>
</div>