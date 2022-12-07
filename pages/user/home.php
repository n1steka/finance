<?php require 'header.php';?>

<style>
td,
th {
    font-size: 12px;
}
</style>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <h5 class="card-title">Таны санхүүгийн гүйлгээ</h5>
                <p class="card-title-desc">
                    Мөнгөн дүнг бүхэл тоогоор оруулна. Сар бүр давтагддаг зардлыг СБ хэсэгт тэмдэглэж ялгана.
                </p>
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th class="px-0 pr-1"></th>
                                <th class="px-0 pr-1">Огноо</th>
                                <th class="px-0 pr-1">Гүйлгээний утга</th>
                                <th class="px-0 pr-1">СБ</th>
                                <th class="px-0 pr-1">Төрөл</th>
                                <th class="px-0 pr-1">Харилцагч</th>
                                <th class="px-0 pr-1">Мөнгө <i class="fa fa-arrow-up text-success mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1">Мөнгө <i class="fa fa-arrow-down text-danger mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1">Хөрөнгө <i class="fa fa-arrow-up text-success mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1">Хөрөнгө <i class="fa fa-arrow-down text-danger mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1">Бараа <i class="fa fa-arrow-up text-success mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1">Бараа <i class="fa fa-arrow-down text-danger mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1">Авлага <i class="fa fa-arrow-up text-success mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1">Авлага <i class="fa fa-arrow-down text-danger mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1">Өр <i class="fa fa-arrow-up text-success mr-1 font-10"></i></th>
                                <th class="px-0 pr-1">Өр <i class="fa fa-arrow-down text-danger mr-1 font-10"></i></th>
                                <th class="px-0 pr-1">Орлого</th>
                                <th class="px-0 pr-1">Зардал</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="/user/record/new" method="post">
                                <tr>
                                    <th scope="row" class="px-0 pl-1">1</th>
                                    <td class="px-0 pr-1"><input type="text" value="2022-11-06" name="ognoo"
                                            class="form-control form-control-sm" id="datepicker">
                                    </td>
                                    <td class="px-0 pr-1"><input value="Дэлгүүрээс хүнс авлаа" name="utga"
                                            class="form-control form-control-sm" style="width: 250px;" type="text"
                                            placeholder=""></td>
                                    <td class="px-0 pr-1">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="togtmol" class="custom-control-input"
                                                id="customCheck02" data-parsley-multiple="groups"
                                                data-parsley-mincheck="2">
                                            <label class="custom-control-label" for="customCheck02"></label>
                                        </div>
                                    </td>
                                    <td class="px-0 pr-1"><input value="дэлгүүр" name="turul"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input value="хүнс" name="hariltsagch"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input value="" name="mungu_usuh"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input value="28000" name="mungu_buurah"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input value="" name="hurungu_usuh"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input value="" name="hurungu_buurah"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input value="" name="baraa_usuh"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input value="" name="baraa_buurah"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input value="" name="avlaga_usuh"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input value="" name="avlaga_buurah"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input value="" name="ur_usuh"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input value="" name="ur_buurah"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input value="" name="orlogo"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input value="28000" name="zardal"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td>
                                        <button type="submit" class="btn btn-instagram p-1 text-center btn-sm ml-1">
                                            <i class="ti-save mr-1"></i>
                                        </button>
                                    </td>
                                </tr>
                            </form>
                            <tr>
                                <th scope="row" class="px-0 pl-1">1</th>
                                <td class="px-0 pr-1">07/01</td>
                                <td class="px-0 pr-1">Төрсөн өдрөөр хоолонд оров</td>
                                <td class="px-0 pr-1">

                                </td>
                                <td>хоол</td>
                                <td>гэрбүл</td>
                                <td></td>
                                <td class="table-danger">69,000</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="table-danger">69,000</td>
                                <td class="pt-3"><i class=" dripicons-document-edit mr-1"></i><i
                                        class="ti-trash mr-1"></i></td>
                            </tr>

                            <tr>
                                <th scope="row" class="px-0 pl-1 pr-2">1</th>
                                <td class="px-0 pr-1">07/01</td>
                                <td class="px-0 pr-1">Цалин Өсөхөө сарын сүүл</td>
                                <td class="px-0 pr-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck02"
                                            data-parsley-multiple="groups" data-parsley-mincheck="2" checked>
                                        <label class="custom-control-label" for="customCheck02"></label>
                                    </div>
                                </td>
                                <td>цалин</td>
                                <td>өсөхөө</td>
                                <td class="table-success">750,000</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="table-success">750,000</td>
                                <td></td>
                                <td><i class=" dripicons-document-edit mr-1"></i><i class="ti-trash mr-1"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'footer.php';?>