<style>
    .nav-pills>.nav-item:hover{
        background-color:  #141452;
        
    }
    
    
    .nav-pills{
    -webkit-transition: all 0.8s ease;
    -moz-transition: all 0.8s ease;
    -ms-transition: all 0.8s ease;
    -o-transition: all 0.8s ease;
    transition: all 0.8s ease;

    }
    
    .nav-pills:hover{
    -webkit-transition: all 0.8s ease;
    -moz-transition: all 0.8s ease;
    -ms-transition: all 0.8s ease;
    -o-transition: all 0.8s ease;
    transition: all 0.8s ease;
    
    
        -webkit-box-shadow: 6px 4px 25px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 6px 4px 25px 0px rgba(0,0,0,0.75);
        box-shadow: 6px 4px 25px 0px rgba(0,0,0,0.75);
        
    }
    
</style>

 <ul class="nav nav-pills flex-column bg-dark">
            <li class="nav-item">
              <a class="nav-link text-white" href="<?php uri(); ?>admin/specialties">Специальности</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="<?php uri(); ?>admin/subjects">Предметы</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  text-white" href="<?php uri(); ?>admin/courses">Курсы</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  text-white" href="<?php uri(); ?>admin/streams">Потоки</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  text-white" href="<?php uri(); ?>admin/groups">Группы</a>
            </li>
</ul>
