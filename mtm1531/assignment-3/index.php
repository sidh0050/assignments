<?php 
$possible_information=array(
'Working inquiries'
,'Working Hours'
,'Working Employeers'
);
require_once 'includes/form-processor.php';
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Registration Form Validation</title>
<link href="css/general.css" rel="stylesheet">

</head>

<body>
<h1><strong>Registration Form</strong></h1>
<h2>Assignment-2</h2>

<form method="post" action="index.php">


<div>
<label for="name"><strong>Name</strong><?php if(isset($errors['name'])): ?><strong class="error">Your Name is required.</strong><?php endif;?></label>
<input id="name" name="name" required value="<?php echo $name; ?>">
</div>

<div>
<label for="email"><strong>E-Mail address</strong><?php if(isset($errors['email'])): ?><strong class="error">Your E-Mail address is required.</strong><?php endif;?></label>
<input type="email" id="email" name="email" required value="<?php echo $email;?>">
</div>

<div>
<label for="User name"><strong>User Name</strong><?php if(isset($errors['User name'])): ?><strong class="error">The maximum length for your User name is 25 characters and not more than it.</strong><?php endif;?></label>
<input id="User name" name="User name" required value="<?php echo $Username; ?>">
</div>


<div>
<label for="password"><strong>Password</strong><?php if(isset($errors['password'])): ?><strong class="error">Your password is required</strong><?php endif;?></label>
<input type="password" id="password" name="password" required value="<?php echo $password; ?>">
</div>





<div>
<label for="information"><strong>Informtion</strong></label>
<select id="information" name="information">
<?php foreach($possible_information as $Key=>$value): ?>
<option value="<?php echo $Key; ?>"><?php echo $value; ?></option>
<?php endforeach; ?>
</select>
</div>


<div>
<label for="message"><strong>Message</strong><?php if(isset($errors['message'])): ?><strong class="error">Your message must be 5 to 100 characters long.</strong><?php endif;?></label>
<textarea id="message" name="message" ><?php echo $message;?></textarea>
</div>

<div>
<label for="notes"><strong>Important Notes</strong><?php if(isset($errors['notes'])): ?><strong class="error">Important notes available here.</strong><?php endif;?></label>
<textarea id="notes" name="notes" ><?php echo $notes;?></textarea>
</div>

<div>



<input type="checkbox"id="terms" name="terms" value="1">
<label for="terms"><strong>I Accept All The terms?</strong><?php if(isset($errors['terms'])): ?><strong class="error">I accept the following terms and conditions</strong><?php endif;?></label>
</div>




<div>
<fieldset>
<legend> <strong>Preffered Languages</strong></legend>

<input type="radio" id="language" name="English" value="language">
<label for="language">English</label>

<input type="radio" id="language" name="French" value="language">
<label for="language">French</label>

<input type="radio" id="language" name="Spanish" value="spanish">
<label for="language">Spanish</label>


</fieldset>
</div>

<div>
<button type="submit">Register My Informations</button>
</div>
</form>




</body>
</html>