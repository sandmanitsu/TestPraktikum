<div class="logo"><img src="/application/img/logo.jpg"/></div>

<div class="table">
    <div class="table-caption">Студенты</div>
	<div class="table-colgroup">
		<div class="table-col" style="width: 10%"></div>
		<div class="table-col" style="width: 30%"></div>
		<div class="table-col" style="width: 30%"></div>
		<div class="table-col" style="width: 30%"></div>
        <div class="table-col" style="width: 30%"></div>
	</div>
	<div class="table-thead">    
		<div class="table-tr">
			<div class="table-th">Порядковый номер</div>
			<div class="table-th">Имя</div>
			<div class="table-th">Фамилия</div>
			<div class="table-th">Направление обучения</div>
            <div class="table-th"></div>
		</div>
	</div>
    <?php foreach ($students as $val): ?>
	<div class="table-tbody"> 
		<div class="table-tr" id="<?php echo $val['id'] ?>">
			<div class="table-th student-id"><?php echo $val['id'] ?></div>
			<div class="table-td"><?php echo $val['firstname'] ?></div>
			<div class="table-td"><?php echo $val['lastname'] ?></div>
			<div class="table-td"><?php echo $val['specialty'] ?></div>
            <div class="table-td" data-target="birthday" style="display: none;"><?php echo $val['birthday'] ?></div>
            <div class="table-td">
            <a href="#openModal" class="btn" data-role="show" data-id="<?php echo $val['id']?>">Дополнительная информация</a>
            </div>
		</div>
    </div>
    <?php endforeach; ?>

    <div id="openModal" class="modal">
        <div class="modal-window">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">Дополнительная информация</div>
                    <a href="#close" title="Close" class="close">x</a>
                </div>
                <div class="modal-body">
                    <p>Дата рождения:</p>    
                    <div id="datebirthday"></div>
                    <form action="student" method="POST" name="form">
                    <input id="val" type="hidden" name="student" value="">
                    <a href="student" onclick="document.form.submit(); return false;">Личное дело</a>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>

<script>
   $(document).ready(function(){
        $(document).on('click','a[data-role=show]',function(){
            let id = $(this).data('id') 
            let birthday = $('#'+id).children('div[data-target=birthday]').text();
            $('#datebirthday').text(birthday);
            
            $("input[value='']").attr('value',id);

            const elem = document.querySelector('.close');
            elem.onclick = ()=>{
                $("input#val").val('');
            };
        })
   }); 
</script>