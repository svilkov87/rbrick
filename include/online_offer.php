<div class="bg_offer"></div>
<div class="wrapp_offer_online">
    <span class="close_offer">&times;</span>
    <div class="wr_off_inner">
        <div class="offer_header">
            <span class="span_offer">Расчет стоимости он-лайн</span>
        </div>
        <div class="offer_body">
            <form action="" id="offer_online_form">
                <div class="col-md-6">
                    <p class="lable">Вы являетесь</p>
                    <select name="offer_select" id="type_of_client">
                        <option value="1">Физическим лицом</option>
                        <option value="2">Юридическим лицом</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <p class="lable">Доставка</p>
                    <select name="offer_select" id="delivery">
                        <option value="1">Доставка</option>
                        <option value="2">Самовывоз</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <p class="lable">ФИО</p>
                    <input type="text" name="name" id="name">
                </div>
                <div class="col-md-6">
                    <p class="lable">Адрес доставки</p>
                    <input type="text" name="adress" id="adress">
                </div>
                <div class="col-md-12">
                    <p class="lable">Контактные данные (электронная почта или телефон)</p>
                    <input type="text" name="contacts" id="contacts">
                </div>
                <div class="col-md-12">
                    <p class="lable">Интересующая Вас продукция и количество</p>
                    <textarea name="text" id="field_txt" cols="30" rows="10"></textarea>
                    <input type="submit"  id="btn_online" name="send_online_offer" value="Получить запрос он-лайн">
                </div>
            </form>
        </div>
    </div>
</div>