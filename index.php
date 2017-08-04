<?include("header.php")?>
<div class="banner">
    <img src="img/banner.jpg">
    <div class="slogan-block">
        <div class="title">Элитный коттедж</div>
        <div class="notice">по индивидуальному проекту</div>
        <div class="price">от 10 000 000 руб</div>
        <div><a href="#" class="btn btn-default">Подобрать</a> </div>
        <div class="triangle-wrapper"><div class="triangle"></div></div>
    </div>
</div>
<div class="belt">
    <div class="container-fluid">
        <div class="belt-header">Наши объекты</div>
        <div class="text-center">
            В современном строительстве загородных домов можно отметить не только престиж. Уединение с природой, выходные или постоянное проживание на свежем воздухе, возможность воспитания детей в экологически чистых условиях, все эти факторы и множество других постоянно напоминают нам о собственном загородном доме. Для нашей компании строительство загородного дома – это благородное дело, так как для большинства людей иметь собственный дом является определенной целью и ценностью в жизни. Мы строим новый маленький мир для наших заказчиков, повышающий уровень жизни, используя проверенные временем технологии, и внедряя инновационные решения, обеспечивающие комфорт и уют в доме.
        </div>
        <div class="object-index-block object-block">
            <div class="row">
                <a href="#" class="col-sm-6 object-item">
                    <div class="preview">
                        <img src="img/house1.jpg">
                    </div>
                    <div class="title">
                        Садовое общество "Лотос"
                        <span>ул. Демина</span>
                    </div>
                    <div class="plus"></div>
                </a>
                <a href="#" class="col-sm-6 object-item">
                    <div class="preview">
                        <img src="img/house2.jpg">
                    </div>
                    <div class="title">
                        Садовое общество "Лотос"
                        <span>ул. Демина</span>
                    </div>
                    <div class="plus"></div>
                </a>
                <a href="#" class="col-sm-6 object-item">
                    <div class="preview">
                        <img src="img/house2.jpg">
                    </div>
                    <div class="title">
                        Садовое общество "Лотос"
                        <span>ул. Демина</span>
                    </div>
                    <div class="plus"></div>
                </a>
                <a href="#" class="col-sm-6 object-item">
                    <div class="preview">
                        <img src="img/house1.jpg">
                    </div>
                    <div class="title">
                        Садовое общество "Лотос"
                        <span>ул. Демина</span>
                    </div>
                    <div class="plus"></div>
                </a>
            </div>
            <div class="text-center">
                <a href="#" class="btn btn-primary btn-lg">Смотреть больше</a>
            </div>
        </div>
    </div>
</div>
<div class="belt pay-block">
    <div class="container-fluid">
        <div class="belt-header">Как купить</div>
        <ul class="nav nav-pills nav-justified" role="tablist">
            <li role="presentation" class="active"><a href="#pay" aria-controls="pay" role="tab" data-toggle="tab">100% оплата</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">рассрочка</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="pay">
                    <div class="icon hidden-xs"><img src="img/purse.png"></div>
                    <div class="text">
                        <ol>
                            <li>Выбираем вместе с Вами подходящий дом.</li>
                            <li>Бронируем понравившийся дом на время оформления документов.</li>
                            <li>Заключаем Договор долевого участия в офисе продаж</li>
                            <li>Регистрируем договор в Росреестре (обычно регистрация занимает 9 дней).</li>
                            <li>Вы вносите оплату за дом после получения зарегистрированного договора.</li>
                        </ol>
                    </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
                <div class="icon hidden-xs"><img src="img/diagram.png"></div>
                <div class="text">
                    <ol>
                        <li>Выбираем вместе с Вами подходящий дом.</li>
                        <li>Бронируем понравившийся дом на время оформления документов.</li>
                        <li>Заключаем Договор долевого участия в офисе продаж</li>
                        <li>Регистрируем договор в Росреестре (обычно регистрация занимает 9 дней).</li>
                        <li>Вы вносите оплату за дом после получения зарегистрированного договора.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


</div>
<div class="belt feedback-block">
    <div class="container-fluid">
        <div class="belt-header">У Вас остались вопросы?</div>
        <form class="form-horizontal" role="form">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputName" class="sr-only">Введите имя</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Введите имя">
                    </div>
                    <div class="form-group">
                        <label for="inputPhone" class="sr-only">Ввдетите номер телефона</label>
                        <input type="tel" class="form-control" id="inputPhone" placeholder="Ввдетите номер телефона">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="sr-only">Ввдетите email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Ввдетите email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea class="form-control" id="msg" placeholder="Задайте Ваш вопрос"></textarea>
                    </div>
                </div>
            </div>
            <div class="padding-top">
                <button type="submit" class="btn btn-default btn-lg col-sm-offset-4 col-sm-4">Отправить</button>
            </div>
        </form>
    </div>

</div>

<?include("footer.php")?>