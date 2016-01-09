<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Application for admission to Grade One in
            year <?php echo(date("Y") + 1);; ?></h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal">
        <div class="box-body">
            <h5>01. Category applied for</h5>

            <div class="form-group">
                <label for="category" class="col-sm-3 control-label">Select category</label>

                <div class="col-sm-9">
                    <div class="radio">
                        <label>
                            <input type="radio" name="female" id="female"
                                   value="option1" checked/>
                            Resident Category
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="female" id="female"
                                   value="female"/>
                            Staff Category
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="female" id="female"
                                   value="female"/>
                            Past Pupil Category
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="female" id="female"
                                   value="female"/>
                            Present Pupil Category
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-body">
            <h5>02. Details of the child:</h5>

            <div class="form-group">
                <label for="nameinfull" class="col-sm-3 control-label">Name in full</label>

                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nameinfull" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="namewithinitials" class="col-sm-3 control-label">Name with
                    initials</label>

                <div class="col-sm-9">
                    <input type="text" class="form-control" id="namewithinitials"
                           placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="sex" class="col-sm-3 control-label">Sex</label>

                <div class="col-sm-9">
                    <div class="radio">
                        <label>
                            <input type="radio" name="female" id="female"
                                   value="option1" checked/>
                            Male
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="female" id="female"
                                   value="female"/>
                            Female
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="religion" class="col-sm-3 control-label">Religion</label>

                <div class="col-sm-9">
                    <input type="text" class="form-control" id="religion"
                           placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="dateofbirth" class="col-sm-3 control-label">Date of birth</label>

                <div class="col-sm-9">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control" id="dateofbirth"
                               data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="dateofbirth" class="col-sm-3 control-label">Age on 31st
                    Jan <?php echo date("Y"); ?></label>

                <div class="col-sm-9">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control" id="dateofbirth"
                               data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-body">
            <h5>03. Details of the Applicant:</h5>

            <div class="form-group">
                <label for="applicantnameinfull" class="col-sm-3 control-label">Name in full</label>

                <div class="col-sm-9">
                    <input type="text" class="form-control" id="applicantnameinfull" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="applicantnamewithinitials" class="col-sm-3 control-label">Name with
                    initials</label>

                <div class="col-sm-9">
                    <input type="text" class="form-control" id="applicantnamewithinitials"
                           placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="applicantnic" class="col-sm-3 control-label">NIC number</label>

                <div class="col-sm-9">
                    <input type="text" class="form-control" id="applicantnic"
                           placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="issrilankan" class="col-sm-3 control-label">Applicant is Sri
                    Lankan</label>

                <div class="col-sm-9 checkbox">
                    <label>
                        <input type="checkbox" id="issrilankan"> Yes
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="applicantreligion" class="col-sm-3 control-label">Religion</label>

                <div class="col-sm-9">
                    <input type="text" class="form-control" id="applicantreligion"
                           placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="permanentaddress" class="col-sm-3 control-label">Permanent
                    Address</label>

                <div class="col-sm-9">
                    <input type="text" class="form-control" id="permanentaddress"
                           placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="telephone" class="col-sm-3 control-label">Telephone number</label>

                <div class="col-sm-9">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" class="form-control" id="telephone"
                               data-inputmask='"mask": "(999) 999-9999"' data-mask>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="residentialdistrict" class="col-sm-3 control-label">Residential
                    District</label>

                <div class="col-sm-9">
                    <input type="text" class="form-control" id="residentialdistrict"
                           placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="dsarea" class="col-sm-3 control-label">Divisional secretariat
                    area</label>

                <div class="col-sm-9">
                    <input type="text" class="form-control" id="dsarea"
                           placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="gndivision" class="col-sm-3 control-label">Grama Niladhari
                    division</label>

                <div class="col-sm-9">
                    <input type="text" class="form-control" id="gndivision"
                           placeholder="">
                </div>
            </div>
        </div>
        <div class="box-body">
            <h5>04. Schools applying for:</h5>

            <div class="form-group select2">
                <label class="col-sm-3 control-label" for="schools">Select school</label>

                <div class="col-sm-9">
                    <select class="form-control select2" id="schools" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                    </select>
                </div>
            </div>


            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>School number</th>
                                <th>Name of school</th>
                                <th>Category of school</th>
                                <th>Distance from the residence</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Mahinda College</td>
                                <td>National School</td>
                                <td>10km</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Richmond College</td>
                                <td>National School</td>
                                <td>7km</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Royal College</td>
                                <td>National School</td>
                                <td>14.5km</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Benedict College</td>
                                <td>National School</td>
                                <td>45km</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Aloysius College</td>
                                <td>National School</td>
                                <td>5km</td>
                            </tr>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>

        <div class="box-body">
            <h5>05. Electoral list registration:</h5>

            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <?php
                            $year = date("Y");
                            ?>
                            <tr>
                                <th>Year</th>
                                <th>Polling division</th>
                                <th>GN division & no.</th>
                                <th>Polling district</th>
                                <th>Street/Village</th>
                                <th>Household no.</th>
                                <th>Serial no.</th>
                                <th>Name of electors</th>
                            </tr>
                            <tr>
                                <td><?php echo $year; ?></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><?php echo $year - 1; ?></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><?php echo $year - 2; ?></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><?php echo $year - 3; ?></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><?php echo $year - 4; ?></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary pull-right">Next</button>
        </div>
        <!-- /.box-footer -->
    </form>
</div>