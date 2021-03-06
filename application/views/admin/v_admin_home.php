<?php $this->load->view('template/v_admin_header.php'); ?>

	<div class="span12">&nbsp;</div>
	<div class="span3">
		<?php $this->load->view('template/v_admin_sidebar'); ?></div><!--/span-->
	<div class="span9 col-sm-12">
		<p>Welcome <?php echo $user['fullname']?>. <a href="<?php echo site_url('login/logout'); ?>">Click here to logout</a>.</p>



<form role="form" class="form-horizontal" action="<?php echo site_url('admin/add'); ?>" method="post">
  <div class="form-group">
    <label for="title" class="col-sm-2 control-label">文章标题:</label>
    <div class="col-sm-10">
      <input type="text" name="title" id="title" class="form-control" id="inputEmail3" placeholder="标题">
    </div>
  </div>
  
  <div class="form-group">
  
  	<div class="col-sm-4">
	<label class="checkbox-inline">
	  <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
	</label>
	</div>
	<div class="col-sm-4">
	<label class="checkbox-inline">
	  <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
	</label>
	</div>
	<div class="col-sm-4">
	<label class="checkbox-inline">
	  <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
	</label>
	</div>
	
  </div>
  


	<p id="tags"><label for="tag">标签:</label>
		<input type="checkbox" name="tag[]" id="javascript" value="JavaScript"/><label for="javascript">JavaScript</label>
		<input type="checkbox" name="tag[]" id="css" value="CSS"/><label for="css">CSS</label>
		<input type="checkbox" name="tag[]" id="html" value="HTML"/><label for="html">HTML</label>
		<input type="checkbox" name="tag[]" id="html5" value="HTML5"/><label for="html5">HTML5</label>
		<input type="checkbox" name="tag[]" id="php" value="PHP"/><label for="php">PHP</label>
		<input type="checkbox" name="tag[]" id="node" value="Node.js"/><label for="node">Node.js</label>
		<input type="checkbox" name="tag[]" id="webgl" value="WEBGL"/><label for="webgl">WEBGL</label>
		<input type="checkbox" name="tag[]" id="java" value="Java"/><label for="java">Java</label>
	</p>

	<p class="add">
		当前标签:<span id="result"></span>
	</p>
	
	<p>
		<label for="group">类别:</label><input type="radio" name="group" id="jswz" value="jswz" checked/>
		<label for="jswz">技术文章</label>
		<input type="radio" name="group" id="sbzt" value="sbzt"/>
		<label for="sbzt">随笔杂谈</label>
	</p>

	<p>
		<label for="time">日期:</label><input type="text" name="time"/>
	</p>

	<p>
		<label for="article">文章:</label><textarea name="article" cols="100" rows="20"></textarea>
	</p>

	<p><input type="submit" id="submit"/></p>
</form>
	</div>


<script>
	window.addEventListener("load", function () {
		var dateInput = document.forms[0]['time'],
			nowDate = new Date(),
			pCheckBox = document.getElementById('tags'),
			resultTag = document.getElementById('result');
		dateInput.value = nowDate.getFullYear() + "-" + (nowDate.getMonth() + 1) + "-" + nowDate
			.getDate();
		pCheckBox.addEventListener('click', function (event) {
			var c = event.target, i;
			if (c.checked === true) {
				resultTag.innerHTML += c.value + "-";
			} else {
				resultTag.innerHTML = resultTag.innerHTML.replace((c.value + "-"), '');
			}
		}, false);

	}, false)
</script>
				
<?php $this->load->view('template/v_admin_footer.php'); ?>
