const idMyTabTema = '.course_nav  #myTab'
const idCardGamer = '.all_courses #content-gamer'

const builListTema = () => {
    let temas = TestDataTema
    var listTema = ''
    listTema += `<li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-key="Todo" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true"> Todos Los Temas</a>
                    </li>`    
    temas.forEach((element,index) => {
        listTema += `<li class="nav-item">
                        <a class="nav-link" id="home-tab" data-key="${element.Codigo}" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="false"> ${element.Descripcion}</a>
                    </li>`        
    })
    return listTema
}

const buildCardJuego = () => {
    let juegos = TestDataJuego
    var cardJuego = ''
    console.log(TestDataJuego);
    juegos.forEach(element => {
        cardJuego += `<div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single_courses">
                                <div class="thumb">
                                    <a href="#">
                                        <img src="img/courses/1.png" alt="">
                                    </a>
                                </div>
                                <div class="courses_info">
                                    <span>Photoshop</span>
                                    <h3><a href="#">Mobile App design step by step <br>
                                            from beginner</a></h3>
                                    <div class="star_prise d-flex justify-content-between">
                                        <div class="star">
                                            <i class="flaticon-mark-as-favorite-star"></i>
                                            <span>(4.5)</span>
                                        </div>
                                        <div class="prise">
                                            <span class="offer">$89.00</span>
                                            <span class="active_prise">
                                                $49
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`
    });
    return cardJuego
}

$(document).ready(function () {
    $(idMyTabTema).html(builListTema())
    $(idCardGamer).html(buildCardJuego())
});