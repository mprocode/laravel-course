<?php 

namespace App\Services;

use Faker\Factory as Faker; 


class FakeChartService {

    public static function generateBarLineChart($size = 5) {
        $chartOptions = [
            "type" => "bar", 
            "data" => [
              "labels" => self::generateLabels($size), 
              "datasets" => [
                self::generateDataSet($size, false, false, false),
                self::generateDataSet($size, false, false, true, 0.3),
                self::generateDataSet($size, false, false, true, 0.3),
                self::generateDataSet($size, false, false, true, 0.3),
              ] 
            ], 
            "options" => [
               "scales" => [ "yAxes" => [ [ "ticks" => [ "beginAtZero" => true ] ] ] ] 
            ] 
        ];
        return $chartOptions;
    }

    public static function generateLinesChart($size = 8) {
        $chartOptions = [
            "type" => "line", 
            "data" => [
              "labels" => self::generateLabels($size), 
              "datasets" => [ 
                self::generateDataSet($size, false, false, true, 0.1),
                self::generateDataSet($size, false, false, true, 0.1),
              ] 
            ], 
            "options" => [ ] 
        ];
        return $chartOptions;      
    }

    private static function genRGBArray($n, $alpha=null) {
        $faker = Faker::create();
        $v = [];
        for($i=0;$i<$n;$i++) {
            $color = $faker->rgbcolor;
            $v[] = $alpha==null ? "rgb($color)" : "rgba($color, $alpha)";
        }         
        return $v;    
    }

    private static function genRandomArr($min, $max, $n) {
        $v = [];
        for($i=0;$i<$n;$i++)
            $v[]=random_int($min, $max);
        return $v;
    }

    private static function genArr($text, $n) {
        $v = [];
        for($i=0;$i<$n;$i++) $v[]=$text;
        return $v;
    }    

    private static function generateDataSet($size, $hasBgOneColor=false, 
                                            $hasBgManyColors=false, $lineChart=false, 
                                            $lineTension=0, $fill=false)  
    {
        $faker = Faker::create();
        $datasetConfig = [
            "data" => self::genRandomArr(0, 100, $size), 
            "fill" => $fill, 
            "borderColor" => "rgba(0,0,0)", 
            "label" => $faker->word
        ];
        if ($hasBgOneColor) {
            $datasetConfig["backgroundColor"] = "rgba(" . $faker->rgbColor . ", 0.2)";
        }
        if ($hasBgManyColors) {
            $datasetConfig["backgroundColor"] = self::genRGBArray($size, 0.2);
        }
        if ($lineChart) {
            $datasetConfig["borderColor"] = "rgb(" . $faker->rgbColor . ")";
            $datasetConfig["lineTension"] = $lineTension;
            $datasetConfig["type"] = "line";
        }
        
        return $datasetConfig;
    }

    private static function generateLabels($size) {
        return Faker::create()->words($size);
    }

    public static function generateBarsChartType1($size = 10, $datasetSize = 2) {
        $datasets=[];
        for ($i=0;$i<$datasetSize;$i++)
          $datasets[] = self::generateDataSet($size, true);
              
        $chartOptions = [
          "type" => "bar", 
          "data" => [
            "labels" => self::generateLabels($size),
            "datasets" => $datasets
          ], 
          "options" => [ "scales" => [ "yAxes" => [ [ "ticks" => [ "beginAtZero" => true ] ] ] ] ] 
       ]; 
        
       return $chartOptions;        
    }

    public static function generateBarsChartType2($size = 10) {
        $chartOptions = [
          "type" => "bar", 
          "data" => [
            "labels" => self::generateLabels($size), 
            "datasets" => [
                self::generateDataSet($size, false, true)
            ] 
          ], 
          "options" => [ 
            "legend" => false ,
            "scales" => [ "yAxes" => [ [ "ticks" => [ "beginAtZero" => true ] ] ] ] 
          ] 
       ]; 
        
       return $chartOptions;        
    }

    public static function generateDoughnutChart($size = 5) {
        $chartOptions =  [
            "type" => "doughnut", 
            "data" => [
              "labels" => self::generateLabels($size), 
              "datasets" => [
                 self::generateDataSet($size, false, true )
              ] 
            ] 
        ];
        return $chartOptions;
    }

    public static function generateRadarChart($size = 8) {
      $chartOptions =  [
        "type" => "radar", 
        "data" => [
          "labels" => self::generateLabels($size), 
          "datasets" => [
              self::generateDataSet($size, true, false, false, 0, true),
              self::generateDataSet($size, true, false, false, 0, true)
          ] 
        ],
        "options" => [
          "legend" => ["position" => "top" ], 
          "title" => [ "display" => true, "text" => "Some Title" ], 
          "scale" => ["ticks" => ["beginAtZero" => true ] ] 
        ]
      ];

      return $chartOptions;
    }


    public static function generatePieChart($size = 10) {
      $chartOptions =  [
          "type" => "pie", 
          "data" => [
            "labels" => self::generateLabels($size), 
            "datasets" => [
               self::generateDataSet($size, false, true )
            ] 
          ],
          "options" => [
            "title" => [ "display" => true, "text" => "Some Title" ],
          ]          
      ];
      return $chartOptions;
  }    
 
}
