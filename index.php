
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Quicksand:400,700"
	rel="stylesheet">
<title>CSS QUIZ</title>
</head>
<body>
<?php  include 'meniu.php';?>
<h1>Try Yourself!</h1>
<form action="index.php" method="post" >
		
            <ol>
            
                <li>
                
                    <h3> Which of the following is correct about CSS?</h3>
                    
                    <div>
                        <input type="radio" name="1-answers"  value="A" <?=  isset($_POST['1-answers'])&& $_POST['1-answers']=='A'?'checked':''?> >
                        <label >A - CSS is used to control the style of a web document in a simple and easy way. </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="1-answers"  value="B" <?=  isset($_POST['1-answers'])&& $_POST['1-answers']=='B'?'checked':''?>>
                        <label>B - CSS is the acronym for "Cascading Style Sheet".</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="1-answers" value="C" <?=  isset($_POST['1-answers'])&& $_POST['1-answers']=='C'?'checked':''?>>
                        <label >C - You can write CSS once and then reuse same sheet in multiple HTML pages.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="1-answers" value="D" <?=  isset($_POST['1-answers'])&& $_POST['1-answers']=='D'?'checked':''?>>
                        <label >D - All of the above.</label>
                    </div>
                <?=  isset($_POST['1-answers'])&& $_POST['1-answers']!=='D'?'Right answer is D':'Correct answer!'?>
                </li>
                
                <li>
                
                    <h3> Which of the following defines a measurement in points?</h3>
                    
                    <div>
                        <input type="radio" name="2-answers" value="A" <?=  isset($_POST['2-answers'])&& $_POST['2-answers']=='A'?'checked':''?>>
                        <label >A - in</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="2-answers"  value="B" <?=  isset($_POST['2-answers'])&& $_POST['2-answers']=='B'?'checked':''?>>
                        <label >B - mm</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="2-answers"  value="C" <?=  isset($_POST['2-answers'])&& $_POST['2-answers']=='C'?'checked':''?>>
                        <label >C - pc</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="2-answers" value="D" <?=  isset($_POST['2-answers'])&& $_POST['2-answers']=='D'?'checked':''?>>
                        <label >D - pt</label>
                    </div>
                    
                        <?=  isset($_POST['2-answers'])&& $_POST['2-answers']!=='D'?'Right answer is D':'Correct answer!'?>
                
                </li>
                
                <li>
                
                    <h3> Which of the following property is used to increase or decrease how bold or light a font appears?</h3>
                    
                    <div>
                        <input type="radio" name="3-answers"  value="A" <?=  isset($_POST['3-answers'])&& $_POST['3-answers']=='A'?'checked':''?>>
                        <label >A - font-family</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="3-answers"  value="B" <?=  isset($_POST['3-answers'])&& $_POST['3-answers']=='B'?'checked':''?>>
                        <label >B - font-style</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="3-answers" value="C"<?=  isset($_POST['3-answers'])&& $_POST['3-answers']=='C'?'checked':''?> >
                        <label >C - font-variant</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="3-answers" value="D" <?=  isset($_POST['3-answers'])&& $_POST['3-answers']=='D'?'checked':''?>>
                        <label >D - font-weight</label>
                    </div>
                    <?=  isset($_POST['3-answers'])&& $_POST['3-answers']!=='D'?'Right answer is D':'Correct answer!'?>
                
                </li>

            </ol>
            
            <input id="submit" type="submit" value="Submit"  />
		
		</form>
	

<hr> 

        <?php
        if (isset($_POST['1-answers']) && isset($_POST['2-answers']) && isset($_POST['3-answers']))   {
            $answer1 = $_POST['1-answers'];
            $answer2 = $_POST['2-answers'];
            $answer3 = $_POST['3-answers'];
    
        
            $totalCorrect = 0;
            
            if ($answer1 == "D") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "D") { $totalCorrect++; }
     
           echo "<div id='results'>$totalCorrect / 3 correct answers! </div>";}
            
        ?>
	






</body>
</html>