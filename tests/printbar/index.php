<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
  <section class="section">
    <div class="section__container">
    <h1><span>Задание 1</span></h1>
      <h2>Список самых повторяющихся слов в тексте:</h2>
      <?php
        function wordsInText($text='Текст по умолчанию, чтобы избежать ошибок. Ваш текст не должен содержать ошибок'){
          $All_words = preg_split('/[\s,;.]+/', $text);
          $Count_all_words = array_count_values($All_words);
          arsort($Count_all_words);
          $sliced_all_words = array_slice($Count_all_words, 0, 5);
          echo '<p class="text">'.$text.'</p>';
          echo '<ul>';
          foreach($sliced_all_words as $key => $value):
            echo '
              <li><strong>'.$key.'</strong> ===> '.$value.'</li>
            ';
          endforeach;
          echo '</ul>';
        }
        wordsInText('Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, eveniet incidunt. Minima earum fuga optio! Deleniti, praesentium veniam dolor molestias eius ut debitis fugit perferendis expedita numquam cumque, explicabo dolorum ab quod hic velit maiores minus. Eligendi et labore excepturi, fugiat minus natus eaque architecto odio nam itaque ex, pariatur fuga ut illo perferendis temporibus nostrum. Dolores sunt, maiores cumque accusantium iure obcaecati ea inventore veniam non, iste, aperiam error voluptatibus? Porro saepe, architecto eum excepturi quod rem ducimus explicabo qui, tempora quaerat vitae obcaecati maiores tempore. Obcaecati maxime placeat numquam ad cumque, dolores tempore quis dignissimos accusantium qui sapiente?')
      ?>
    </div>
  </section>


  <section class="section canvas">
    <div class="section__container">
      <h1><span>Задание 2</span></h1>
      <canvas id="canvas" width="1000" height="1000"></canvas>
      <div class="canvas__footer">
        <button id="btn" onclick="rotate_can()">Увеличить и повернуть</button>
      </div>
    </div>
  </section>


  <section class="section canvas">
    <div class="section__container">
      <h1><span>Задание 3</span></h1>
      <code>
        SELECT newProdoct.* FROM (
          SELECT *, ROW_NUMBER() OVER(PARTITION BY id_collection ORDER BY id DESC) AS 'row' FROM prodocts
                
        ) as newProdoct WHERE  newProdoct.row IN (1,2)
      </code>
    </div>
  </section>

  
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>
</html>