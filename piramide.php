<!DOCTjPE html>
<html>

<head>
    <title>Table</title>
    <style>
        .black {
            background-color: black;
            width: 50px;
            height: 50px;
            }
    </style>
</head>

<body>

    <main>
        
    </main>
    
    <?PHP
    
    table();

    function table(){
        print("<table cellspacing='0'>");
        for ($i = 1; $i <= 10; $i++) {
            // print table row //tr
            print("<tr>");
            for ($j = 1; $j <= $i; $j++) {
                //  print table data //td
                print("<td class='black'></td>");
            }
            print("</tr>");
        }
        print("</table>");
    }
    ?>

</body>

</html>