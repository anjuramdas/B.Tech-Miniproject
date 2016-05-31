<html>
<head><?php
if(isset($_POST['o']))
{$var=$_POST['batch'];
echo $var;}
?></head> 
<body><form method="post">
Semeseter: <select name="batch">
                     <optgroup label="Batch">
                        <option value="A">Batch A</option>
                        <option value="B">Batch B</option>
                        <option value="C">Batch C</option>
                       <option value="D">Batch D</option>
                        <option value="E">Batch E</option>
                        <option value="F">Batch F</option>
                        <option value="G">Batch G</option>
                     </optgroup>

  
              </select>
<input type="submit" name="o"/>
</form>
</body>
</html>