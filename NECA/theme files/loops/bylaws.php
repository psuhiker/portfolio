<?php
    function integerToRoman($integer) {
        $integer = intval($integer);
        $result = '';
        $lookup = array(
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1
        );
        foreach($lookup as $roman => $value){
            $matches = intval($integer/$value);
            $result .= str_repeat($roman,$matches);
            $integer = $integer % $value;
        }
        return $result;
    }
?>

<div class="searchable">

    <?php $articlecounter = 1; ?>
    <?php $sectioncounter = 1; ?>
    
    <?php
        if( have_rows('bylaws_article') ):
        while ( have_rows('bylaws_article') ) : the_row(); 
    ?>
    
        <h1 class="item">Article <?php echo integerToRoman($articlecounter); ?> - <?php the_sub_field('bylaws_article_title'); ?></h1>
        
            <?php $sectionsubcounter = 1; ?>
        
            <?php
                if( have_rows('bylaws_section') ):
                while ( have_rows('bylaws_section') ) : the_row(); 
            ?>
            
                <div class="item">
                    
                    <h2>Section <?php echo $sectioncounter; ?>.<?php echo str_pad($sectionsubcounter, 2, "0", STR_PAD_LEFT); ?> - <?php the_sub_field('bylaws_section_title'); ?></h2>
                    <?php the_sub_field('bylaws_section_text'); ?>
                    
                    <?php $sectionsubcounter++; ?>
                    
                </div>
            
            <?php endwhile; ?>
                <?php $sectioncounter++; ?>
            <?php else : endif; ?>
            
        <?php $articlecounter++; ?>
    
    <?php 
        endwhile; else : endif;
    ?>

</div>