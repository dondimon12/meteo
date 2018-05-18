<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>База</title>
      <link href="styles/style.css" rel="stylesheet">
   </head>
   <body>
      <script src="scripts/script.js"></script>
      <div class="import">
         <h1>Данные</h1>

         <form action="file_upload1.php" method="POST" class="form2">
            <input name="bar" type="submit" value="Импорт из CSV" class="button1"/>
         </form>
         <form action="insert.php" method="POST" class="form4">
            <input name="bar" type="submit" value="Ручной ввод" class="button1"/>
         </form>
          <form action="data.php" method="POST" class="form4">
            <h3>Вывод данных:</h3>
            <p><input type="radio" name="dan" value="h"/>Гидрометео</p>
            <p>  <input type="radio" name="dan" value="s"/>Стационарная</p>
            <p>  <input type="radio" name="dan" value="l"/>Лизиметрическая</p>
      <p>   <input name="data" type="submit" value="Вывод данных" class="button1"/></p>
       </form>
       <form action="export.php" method="POST" class="form4">
         <h3>Экспорт данных:</h3>
         <p><input type="radio" name="dan" value="h"/>Гидрометео</p>
         <p>  <input type="radio" name="dan" value="s"/>Стационарная</p>
         <p>  <input type="radio" name="dan" value="l"/>Лизиметрическая</p>
   <p>   <input name="data" type="submit" value="Экспорт" class="button1"/></p>
    </form>
      </div>
      <div class="graph">
         <h1>Построение графиков</h1>
         <form action="chart1.php"  method="post" enctype="multipart/form-data" class="form3">
            <h3>Гидрометео:</h3>
            <p>
               <input type="checkbox" id="1" name="data[]" value="mm" onclick="checkCB()"/>mm
               <input type="checkbox" id="2" name="data[]" value="deg" onclick="checkCB()" />deg
               <input type="checkbox" id="3" name="data[]" value="msdo" onclick="checkCB()" />msdo
               <input type="checkbox" id="4" name="data[]" value="Cdo" onclick="checkCB()" />Cdo
               <input type="checkbox" id="5" name="data[]" value="Prdo" onclick="checkCB()" />Prdo
               <input type="checkbox" id="6" name="data[]" value="hPado" onclick="checkCB()" />hPado
            </p>
            <p>
               <input type="checkbox" id="7" name="data[]" value="mmcharp" onclick="checkCB()" />mmcharp
               <input type="checkbox" id="8" name="data[]" value="WmI" onclick="checkCB()" />WmI
               <input type="checkbox" id="9" name="data[]" value="HKBat" onclick="checkCB()" />HKBat
               <input type="checkbox" id="10" name="data[]" value="HKTemp" onclick="checkCB()" />HKTemp
               <input type="checkbox" id="11" name="data[]" value="HLrH" onclick="checkCB()" />HLrH
            </p>
            <p>
         <form action="chart1.php" method="post" enctype="multipart/form-data" class="form3">
            <h3>Стационарная:</h3>
            <p>
               <input type="checkbox" id="12" name="data1[]" value="CThirdty" onclick="checkCB()" />CThirdty
               <input type="checkbox" id="13" name="data1[]" value="procdoThirdty" onclick="checkCB()" />procdoThirdty
               <input type="checkbox" id="14" name="data1[]" value="SmdoThirdty" onclick="checkCB()" />SmdoThirdty
              </p>
               <p>
               <input type="checkbox" id="15" name="data1[]" value="CThirdtyF" onclick="checkCB()" />CThirdtyF
               <input type="checkbox" id="16" name="data1[]" value="pFdoThirdty" onclick="checkCB()" />pFdoThirdty
               <input type="checkbox" id="17" name="data1[]" value="CSixty" onclick="checkCB()" />CSixty
            </p>
            <p>
               <input type="checkbox" id="18" name="data1[]" value="procdoSixty" onclick="checkCB()" />procdoSixty
               <input type="checkbox" id="19" name="data1[]" value="SmdoSixty" onclick="checkCB()" />SmdoSixty
               <input type="checkbox" id="20" name="data1[]" value="CSixtyF" onclick="checkCB()" />CSixtyF
             </p>
                <p>
               <input type="checkbox" id="21" name="data1[]" value="pFdoSixty" onclick="checkCB()" />pFdoSixty
               <input type="checkbox" id="22" name="data1[]" value="CHThirdty" onclick="checkCB()" />CHThirdty
               <input type="checkbox" id="23" name="data1[]" value="doHThirdty" onclick="checkCB()" />doHThirdty
            </p>
            <p>
               <input type="checkbox" id="24" name="data1[]" value="SmdoHThirdty" onclick="checkCB()" />SmdoHThirdty
               <input type="checkbox" id="25" name="data1[]" value="CHThirdtyF" onclick="checkCB()" />CHThirdtyF
               <input type="checkbox" id="26" name="data1[]" value="pFdoHThirdty" onclick="checkCB()" />pFdoHThirdty
              </p>
                <p>
               <input type="checkbox" id="27" name="data1[]" value="HKBatV" onclick="checkCB()" />HKBatV
               <input type="checkbox" id="28" name="data1[]" value="HKTempC" onclick="checkCB()" />HKTempC
               <input type="checkbox" id="29" name="data1[]" value="HKrH" onclick="checkCB()" />HKrH
            </p>
            </p>
            <p><input type="submit" value="Ok" class="button1"/></p>
         </form>
      <!--   <form action="chart.php" method="post">
           <input type="submit" name="bar" value="bar"/>
         </form>
         -->
      </div>
   </body>
</html>