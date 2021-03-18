<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calendar</title>
</head>
<script>
    function addOptionDay(month){
        var select = document.getElementById('date');

        console.log(month);
        

        if(month == 1){
          var  day = 31;

          for(var i = 1 ; i <= day ; i++){
            select.options[i] = new Option(i,i,true,false);
        }
        }
        
        else if(month == 4 ){
          var  day = 30;

          for(var i = 1 ; i <= day ; i++){
            select.options[i] = new Option(i,i,true,false);
        }
        }
        
        else if(month == 6 ){
          var  day = 30;

          for(var i = 1 ; i <= day ; i++){
            select.options[i] = new Option(i,i,true,false);
        }
        }
        
        else if(month == 9 ){
          var  day = 30;

          for(var i = 1 ; i <= day ; i++){
            select.options[i] = new Option(i,i,true,false);
        }
        }
        
        else if(month == 2){
          var  day = 28;
          
          for(var i = 1 ; i <= day ; i++){
            select.options[i] = new Option(i,i,true,false);
        }
        }
        
        else if(month == 11 ){
          var  day = 30;
            console.log(day);
          for(var i = 1 ; i <= day ; i++){
            select.options[i] = new Option(i,i,true,false);
        }
        }
        
        else if(month == 3 ){
          var  day = 31;

          for(var i = 1 ; i <= day ; i++){
            select.options[i] = new Option(i,i,true,false);
        }
        }
        
        else if(month == 5 ){
          var  day = 31;

          for(var i = 1 ; i <= day ; i++){
            select.options[i] = new Option(i,i,true,false);
        }
        }
        
        else if(month == 7 ){
          var  day = 31;

          for(var i = 1 ; i <= day ; i++){
            select.options[i] = new Option(i,i,true,false);
        }
        }
        
        else if(month == 8 ){
          var  day = 31;

          for(var i = 1 ; i <= day ; i++){
            select.options[i] = new Option(i,i,true,false);
        }
        }
        
        else if(month == 10 ){
          var  day = 31;

          for(var i = 1 ; i <= day ; i++){
            select.options[i] = new Option(i,i,true,false);
        }
        }
        
        else if(month == 12 ){
          var  day = 31;

          for(var i = 1 ; i <= day ; i++){
            select.options[i] = new Option(i,i,true,false);
            }
        }

    }
</script>
<body>
    <form action="showDay.php" method="POST">
        <select name="month" onchange="addOptionDay(this.value)">
            <option></option>
            <option value="01">January</option>
            <option  value="02">February</option>
            <option  value="03">March</option>
            <option  value="04">April</option>
            <option  value="05">May</option>
            <option  value="06">June</option>
            <option  value="07">July</option>
            <option  value="08">August</option>
            <option  value="09">September</option>
            <option  value="10">Octoner</option>
            <option  value="11">November</option>
            <option  value="12">December</option>
        </select>

        <select name="date" id="date">
            <option></option>
        </select>

        <input type="submit" />
    </form>
</body>
</html>