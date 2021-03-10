<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
  </head>
  <body>
    
    <div class="card-columns card-body">


      <!-- first column -->
      <div class="card card-body">
      <h4>Text : The quick brown fox jumps over the lazy dog</h4>
      <?php $str = "The quick brown fox jumps over the lazy dog"; ?>
        <h4 class="card-title">#1</h4>
        <div class="card-body">
          <h4 class="card-title">a</h4>

          <p class="card-text">convert all the string to lower case</p>
          <i><?php echo strtolower($str); ?></i>
        </div>
        <div class="card-body">
          <h4 class="card-title">b</h4>

          <p class="card-text">convert all the string to upper case</p>
          <i><?php echo strtoupper($str); ?></i>
        </div>
        <div class="card-body">
          <h4 class="card-title">c</h4>

          <p class="card-text">
            convert the first character of the string to upper case
          </p>
          <i><?php echo ucfirst($str); ?></i>
        </div>
        <div class="card-body">
          <h4 class="card-title">d</h4>

          <p class="card-text">
            convert the first character of all the words string to upper case
          </p>
          <i><?php echo ucwords($str); ?></i>
        </div>
      </div>


      <!-- second column  -->
      <div class="card card-body">
        <h4 class="card-title">#2</h4>
        <div class="card-body">
          <h4 class="card-title">a</h4>
          <p class="card-text">
            Write a PHP script to print the next character of a specific
            character.
          </p>
          <p>input a</p>
          <i
            ><?php 
                    $char = "a";
                    $next_char = ++$char;
                    if(strlen($char) >
            1) { echo $next_char[0]; }else{ echo $next_char; } ?>
            </i
          >
          <p>input z</p>
          <i
            ><?php 
                    $char = "z";
                    $next_char = ++$char;
                    if(strlen($char) >
            1) { echo $next_char[0]; }else{ echo $next_char; } ?></i
          >
        </div>
        <div class="card-body">
          <h4 class="card-title">b</h4>
          <p>Write a PHP script to print letters from 'a' to 'z'.</p>
          <p>output</p>
          <i><?php 
                $starting = "a";
                for($var = 0 ; $var < 26 ; $var++)
                {
                echo $starting++;
                
                }
                ?></i>
        </div>
        <div class="card-body">
          <h4 class="card-text">c</h4>
          <p>
            Write a PHP script to replace the first 'dog' of the following
            string with 'cat'. <br />
            Sample text: 'the quick brown fox jumps over the lazy dog.'
          </p>
          <p>output</p>
         <i> <?php
                $sample_string  = "the quick brown fox jumps over the lazy dog.";
                echo str_replace("dog","cat","$sample_string");

                ?></i>
        </div>
      </div>
      <!-- third column -->
      <div class="card card-body">
        <h4 class="card-title">#3</h4>
        <div class="card-body">
          <h4 class="card-title">a</h4>
          <p>
            Write a PHP script that removes the last word from a string. Sample
            string : 'The quick brown fox'
          </p>
            <i> <?php
                $sample_string1 = "The quick brown fox";
                $array = explode(" ",$sample_string1);
                echo chop($sample_string1,$array[sizeof($array)-1]);
                
                
               ?></i>
        </div>
        <div class="card-body">
          <h4 class="card-title">b</h4>
          <p>
            Write a PHP script to remove non-numeric characters except comma and
            dot. Sample string : '$187,78.00A'
          </p>
          <i> <?php
                $sample_string2 = "'$187,78.00A";
                $reg1 = "/[^0-9|^.|^,]/i";
                echo chop(preg_replace($reg1,"",$sample_string2));
                
                
               ?></i>
        </div>
        <div class="card-body">
          <h4 class="card-title">c</h4>
          <p>
            Write a PHP script to remove all characters from a string except 0-9
            a-z A-Z or " ". Sample string : cvraman$global @university )odisha]
          </p>
         <i>
         <?php
                $sample_string3 = 'cvraman$global @university )odisha]';
                $reg2 = "/[^0-9|^.|^,|^\s|a-z]/i";
                echo chop(preg_replace($reg2,"",$sample_string3));
                
                
               ?>
         </i>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
