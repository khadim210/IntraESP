<?php $plafond = count($stat1) ?>

Morris.Bar({
            element: 'hero-bar',
            data: [
    <?php for ($i = 0; $i < count($stat); $i++) {  $y=$i+1 ?>
    {x: '<?php echo $stat[$i]['libClasse'] ?>', Heure_Prévu: <?php echo $stat[$i][3]+$stat[$i][4]+$stat[$i][5] ?> , Heure_en_Cours: <?php echo $stat[$i][0]+$stat[$i][1]+$stat[$i][2] ?>}<?php if ($i <count($stat)-1) {
    echo ',';
    }  ?> 
<?php    } ?>
    
  ],
  xkey: 'x',
  ykeys: ['Heure_en_Cours', 'Heure_Prévu'],
  labels: ['Heure en Cours', 'Heure Prévu'],
  stacked: true,
  xLabelMargin: 10,
  hideHover: 'auto',
});

Morris.Area({
            element: 'hero-area',
            data: [
      <?php for ($i = 0; $i < count($stat1); $i++) {  $y=$i+1 ?>
                {period: '<?php echo $stat1[$i]['libAnnee'].'-'.$stat1[$i]['libMois'] ?>', CM: <?php echo $stat1[$i][0] ?>, TP: <?php echo $stat1[$i][1] ?>,TD: <?php echo $stat1[$i][2] ?>}<?php if ($i <count($stat1)-1) {
    echo ',';
    }  ?> 
      <?php    } ?>
    
            ],
            xkey: 'period',
            ykeys: ['CM', 'TP','TD'],
            labels: ['Cours Magistrale', 'Travaux Pratiques','Travaux Dirigés'],
            lineWidth: 2,
            hideHover: 'auto',
            lineColors: ["#81d5d9", "#a6e182","#4169E1"]
          });
