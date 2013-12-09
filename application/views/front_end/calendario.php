<section class="contenido">
    <? echo $this->calendar->generate($this->uri->segment(3), $this->uri->segment(4)); ?>
    <br>
    <? echo $this->calendar->generate('2012','9',$data); ?>
    <br>
    <br>
</section>
