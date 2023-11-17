<?php
/**
 * The main template file
 *
 * Template Name: test
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content">

	
        <section class="cover">
            <div class="container">
              <div class="text text-center align-itemes-center " >
                <h1>the best coffee & restaurant in<br> brooklyn</h1>
                <p> <i> brought to you by freehtml5.co</i></p>
                </div>
            </div>
        </section>



        <section class="">
    <div class="container">
      <h2>loop</h2>

      <?php
      for ($i=1; $i<=20; $i++){
       echo $i ."<br>"  ;    
      }
      ?>
      <select name="year" id="">
        <?php
        for($year=1900 ; $year <=2015; $year++){
          echo "<option value = '$year' >  $year </option>";
        }
        ?>
      </select>

      <hr>

      <?php
      $i=1;
      for (; ;){
        if($i>20){
          break;
        }
        echo $i ."<br>";
        $i++;
      }
      ?>
      <hr>

     <?php
     $i=10;
     while($i<=20):
      echo $i ."<br>";
      $i++;
     endwhile;
     ?>
     <hr>

     <?php
     $i=50;
     while($i<=60):
      echo $i."<br>";
      $i++;
     endwhile;
     ?>

    <hr>
    <?php
    $i=70;
    do{
      echo $i++."<br>";
    }while($i<=75);
    ?>
    <hr>

    <?php
    $contries =array(
      "Eg" => "Egypt",
      "Sa"  => "saudi aribia",
      "Qa"  => "Qatar",
    );
    foreach($contries as $key => $value){
      echo $key ." nice " .$value."<br>";
    }
    ?>
</div>
</section>


<section class="">
    <div class="container">.
      <hr>
      <h2>function</h2>
   

    <?php
    function countFromOneToThirty($i){
      for($i=1; $i<=30; $i++){
      echo $i;

      }
    }
function sayHello(){
  echo"Hello World";
}
sayHello()
?>
<hr>

<?php
// calculate(22,03);
function calculate($day,$month){
if($day<=21){
echo "yes";
}else{
  echo "no";
}
  echo $day ;
  echo "<br>";
  echo $month;
}



?>

<?php
$i=200;
$b=300;
if($i > $b){
  echo "true";
}elseif($i<$b){
  echo "smaller";
}else {
  echo "bla bla bla";
}


?>

<hr>
<?php
getSign(20,1);

function getSign($day, $month){
  if(($month==1 && $day>19)||($month==2 && $day<21)){
    $mysign="aquarius";
  }

  echo $mysign;
}

?>
    </div>

  </section>
  

        <?php get_footer(); ?>