<?php
$str="En this section, we intrduce a general style of btom-up syntax analysis,
known as shift-reduce parsing. An easy-to-implement form of shi it-reduce
parsing, called operator-precedence parsing, is presented in Section 4.6. A
much mare general methud of shift-reduce parsing, called LR parsing, is discussed
in Section 4.7. LR parsing is used in a number of automatic parser
genera tors.Shift-reduce parsing attempts to construct a parse tree for an input string
beginning at the leaves (the bottom) and working up towards the r o d (the
top). We can think of this process as one of reduciag a string w to the start
symbl of a grammar. At each reductio~ step a particular substring matching
the right side of a production is replaced by the symtd on the left of that prwductim,
and if the substring is chosen correctly at each step, a righimost
derivation is traced out in reverse.";
for($i=0;$i<strlen($str);$i++)
{
	if($i%2==0)
	{?><font face="Hashi"><b><font size="+1"><?php echo $str[$i];
}
    else{?><font face="Times New Roman"><?php echo $str[$i];
		
}}
	?>
</b></font></font>
