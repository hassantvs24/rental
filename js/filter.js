$('.btn-reset').click(function () {
    $('.filter-criteria').val('all');
    $('#sorter_tag').val('PriceLow2High');
    InitFiltering();
})

$('.filter-criteria').change(function () {
    InitFiltering();
})

function InitFiltering () {
    temporaryObject = JSON.parse(JSON.stringify(locationInfo));
    filterBySize();
    filterByFeature();
    filterByDeals();
    $("#mprDetailDataTable tbody").html(GenerateTablebody(temporaryObject));
    Sorting();
}

function filterBySize () {
    let sizeCode = $('#size_filter').val();
        
    if (sizeCode=="all") {
        temporaryObject = JSON.parse(JSON.stringify(locationInfo));
    }
    else if (sizeCode=="small")  {
        SizeFilter(0, 75);          
    }
    else if (sizeCode=="medium") {
        SizeFilter(76, 150);
    }
    else if (sizeCode=="large") {
        SizeFilter(150, 400);
    }
};


function SizeFilter(areaFrom, areaTo) {
    let unitArray = {};

    $.each(temporaryObject['units'], function (unitKey, unit) {
        if(unit['UnitExtra']['ExcludeFromWebsite'] == "false" && unit['ExcludeFromInsurance'] == "false" && unit['Width'] != 0 && unit['Length'] != 0) {
            if (Number(unit['TotalArea'])>=areaFrom && Number(unit['TotalArea'])<=areaTo) {
                unitArray[unitKey]=unit;
            }
        }

    });

    temporaryObject['units'] = unitArray;
    //$("#mprDetailDataTable tbody").html(GenerateTablebody(temporaryObject));
}



function filterByFeature() {
        let feature = $('#feature_filter').val();
        let unitArray = {};
        if (feature!="all") {
            $.each(temporaryObject['units'], function (unitKey, unit) {

                if(unit['UnitExtra']['ExcludeFromWebsite'] == "false" && unit['ExcludeFromInsurance'] == "false" && unit['Width'] != 0 && unit['Length'] != 0) {
                    if (unit['CustomFields'].indexOf(feature) !== -1) {
                        unitArray[unitKey]=unit;
                    }
                }
            });

            temporaryObject['units'] = unitArray;
        }
        
};


function filterByDeals() {
    let deals = $('#deals_filter').val();
    let unitArray = {};
    if (deals!="all") {
        $.each(temporaryObject['units'], function (unitKey, unit) {
            if(unit['UnitExtra']['ExcludeFromWebsite'] == "false" && unit['ExcludeFromInsurance'] == "false" && unit['Width'] != 0 && unit['Length'] != 0) {
                if(unit["ConcessionID"] != -999) {
                    if(deals == unit['Concession']['PlanName']){
                        unitArray[unitKey]=unit;
                    
                    }
                }
            }
                
        })

        temporaryObject['units'] = unitArray;
    }
};


function Sorting(){
    let sorter_tag = $('#sorter_tag').val();
        
    let unitArray = {};
    let final={};
    
    if (sorter_tag=="PriceLow2High") {
        SortingManagement("rate", "asc")
    }
    else if (sorter_tag=="PriceHigh2Low") {
        SortingManagement("rate", "desc")
    }
    else if (sorter_tag=="SizeLow2High") {
        SortingManagement("area", "asc")
    }
    else if (sorter_tag=="SizeHigh2Low") {
        SortingManagement("area", "desc")
    }
}



function SortingManagement(sortType, sortOrder) {
    let dataMatch = '';
    let unitArray = {};
    
    if (sortType=="rate") {
        dataMatch = 'StandardRate';
    }
    else if (sortType=="area") {
        dataMatch = 'TotalArea';
    }


    $.each(temporaryObject['units'], function (unitKey, unit) {
        unitArray[unitKey] = unit[dataMatch];
    });

    let sortable = [];

    for (var yy in unitArray) {
        sortable.push([yy, unitArray[yy]]);
    }

    sortable.sort(function(a, b) {
        return a[1] - b[1];
    });

    if (sortOrder == "desc") {
        sortable.reverse();
    }

    var table = jQuery("#mprDetailDataTable");
    var trHtml='';

    for (let i = 0; i<= sortable.length - 1; i++) {
        let ppp = sortable[i][0];
        table.find('tr').each(function (i, el) {
            var unitid = parseInt($(this).data('unitid'));
            if (ppp == unitid) {
                trHtml+= $(this).prop('outerHTML');
                            
            }
        });
    }  

    $('#mprDetailDataTable tbody').html(trHtml);
}



function LoadFeatureDropDown() {
    var xx =[]; var sNameV='';
    var option='<option value="all">All</option>';
    $.each(locationInfo['units'], function (unitKey, unit) {
        $.each(unit['CustomFields'], function (sNameKey, sName) {
            if(xx.indexOf(sName) == -1)  {
                xx.push(sName);
                if(sName == "Custom Unit Attribute 1") {
                    sNameV = "Access 6a – 11p";
                } else if(sName == "Custom Unit Attribute 2") {
                    sNameV = "24/7 Monitoring";
                } else if(sName == "Custom Unit Attribute 3") {
                    sNameV = "Unload Indoors";
                } else if(sName == "Custom Unit Attribute 4") {
                    sNameV = "Loading Dock";
                } else if(sName == "Custom Unit Attribute 5") {
                    sNameV = "Drive Up Unit";
                } else if(sName == "Automobile") {
                    sNameV = "Vehicle Storage";
                } else if(sName == "Boat") {
                    sNameV = "Boat Storage";
                } else if(sName == "Heated") {
                    sNameV = "Heated Units";
                } else if(sName == "Lighted") {
                    sNameV = "Lighted";
                } else if(sName == "Air Cooled") {
                    sNameV = "Air Cooled";
                }
                option+=`<option value="${sName}">${sNameV}</option>`;
            }
        });
    });
    $("#feature_filter").html(option);
}


function LoadDealDropDown() {
    var xx =[];
    var option='<option value="all">All</option>';
    $.each(locationInfo['units'], function (unitKey, unit) {
        if(unit["ConcessionID"] != -999) {
            if(xx.indexOf(unit['Concession']['PlanName']) == -1)  {
                xx.push(unit['Concession']['PlanName']);
                option+=`<option value="${unit['Concession']['PlanName']}">${unit['Concession']['PlanName']}</option>`;
            }
            
        }
    });
    $("#deals_filter").html(option);
}

function GenerateTablebody(locationArray) {
    let html = '';
    $.each(locationArray['units'], function (unitKey, unit) {
        let iFloor = unit['UnitExtra']['Floor'];
        let bClimate = unit['UnitExtra']['ClimateControlled'];
        let iEntryLoc = unit['UnitExtra']['EntryLocation'];
        let bExcludeFromWebsite = unit['UnitExtra']['ExcludeFromWebsite'];
        let conID = unit['ConcessionID'];

        let price='';
        let planText = '';
        let codes = '';
        


        if(conID == -999) {
            price = unit['StandardRate'];
                planText = "";
        } 
        else {
            price = unit['Concession']['DiscountedRate'];
            planText = `<span class='highlightFeat' style='background:#034A97;'>${unit['Concession']['PlanName']}</span><center><small><b>Sale Ends March 31st</b></small></center>`;
        }



        if(Number(unit['Width']) == 5 && Number(unit['Length']) == 5) {
            codes = "<small>A 5 × 5 unit is approximately 25 sq feet and is suitable for storing the contents of a closet that needs decluttering, or small amounts of personal possessions. This unit is capable of storing items like: Small Seasonal Items, Small to Medium Moving Boxes, Loveseat, Chairs, End Tables, Record Collections, Family Keepsakes, Twin Mattress, and File Cabinets. </small>";
            codes += '<div style="padding-top: 56.25%; position: relative; overflow: hidden; box-shadow: rgb(51, 51, 51) 10px 10px 42px -21px;margin-top:10px;"><iframe frameborder="0" allowfullscreen="" scrolling="no" allow="autoplay;fullscreen" src="https://onelineplayer.com/player.html?autoplay=true&autopause=false&muted=true&loop=true&url=https%3A%2F%2Fbluebirdstorage.ca%2Fwp-content%2Fuploads%2F2022%2F01%2F5x5-Storage-Guide-Animation.mp4&poster=&time=false&progressBar=false&overlay=false&muteButton=false&fullscreenButton=false&style=light&quality=auto&playButton=false" style="position: absolute; height: 100%; width: 100%; left: 0px; top: 0px;"></iframe></div>';
        } 
        else if(Number(unit['Width']) == 5 && Number(unit['Length']) == 10) {
                    
            codes = '<div style="padding-top: 56.25%; position: relative; overflow: hidden; box-shadow: rgb(51, 51, 51) 10px 10px 42px -21px;"><iframe frameborder="0" allowfullscreen="" scrolling="no" allow="autoplay;fullscreen" src="https://onelineplayer.com/player.html?autoplay=true&autopause=false&muted=true&loop=true&url=https%3A%2F%2Fbluebirdstorage.ca%2Fwp-content%2Fuploads%2F2022%2F01%2F5x10-Storage-Guide-Animation.mp4&poster=&time=false&progressBar=false&overlay=false&muteButton=false&fullscreenButton=false&style=light&quality=auto&playButton=false" style="position: absolute; height: 100%; width: 100%; left: 0px; top: 0px;"></iframe></div>';
                    
        }
        else if(Number(unit['Width']) == 5 && Number(unit['Length']) == 15) {
                    
            codes = '<div style="padding-top: 56.25%; position: relative; overflow: hidden; box-shadow: rgb(51, 51, 51) 10px 10px 42px -21px;"><iframe frameborder="0" allowfullscreen="" scrolling="no" allow="autoplay;fullscreen" src="https://onelineplayer.com/player.html?autoplay=true&autopause=false&muted=true&loop=true&url=https%3A%2F%2Fbluebirdstorage.ca%2Fwp-content%2Fuploads%2F2022%2F01%2F5x15.mp4&poster=&time=false&progressBar=false&overlay=false&muteButton=false&fullscreenButton=false&style=light&quality=auto&playButton=false" style="position: absolute; height: 100%; width: 100%; left: 0px; top: 0px;"></iframe></div>';
                    
        }
        else if(Number(unit['Width']) == 10 && Number(unit['Length']) == 10) {
                    
            codes = '<div style="padding-top: 56.25%; position: relative; overflow: hidden; box-shadow: rgb(51, 51, 51) 10px 10px 42px -21px;"><iframe frameborder="0" allowfullscreen="" scrolling="no" allow="autoplay;fullscreen" src="https://onelineplayer.com/player.html?autoplay=true&autopause=false&muted=true&loop=true&url=https%3A%2F%2Fbluebirdstorage.ca%2Fwp-content%2Fuploads%2F2022%2F01%2F10x10-Storage-Guide-Animation.mp4&poster=&time=false&progressBar=false&overlay=false&muteButton=false&fullscreenButton=false&style=light&quality=auto&playButton=false" style="position: absolute; height: 100%; width: 100%; left: 0px; top: 0px;"></iframe></div>';
                    
        } 
        else {
            codes = "";
        }

        let title = `<h3>${Number(unit['Width'])} x ${Number(unit['Length'])}' </h3>`;
        if (codes == "") 
        {
            title = "";
        }


        if(bExcludeFromWebsite == "false" && unit['ExcludeFromInsurance'] == "false" && unit['Width'] != 0 && unit['Length'] != 0) {
            
            html+=`<tr class="shortableClass unit_${unit['UnitID']}" data-listing-price="${Math.round(unit['Width'])} * ${Number(unit['Length'])}" data-size="${Number(unit['Width'])} * ${Number(unit['Length'])}" data-area="${Number(unit['TotalArea'])}" data-unitid="${unit['UnitID']}">
                    <td class="">
                        <div class="col-md-7 sizeSecIcon">
                        
                            <div class="row">
                                <div class="col-md-3">
                                    <h2 class="widthHeight" style="font-weight:bold;margin-bottom:20px;"><yy>${Number(unit['Width'])}'<yy1>WIDTH</yy1></yy>
                                    x <xx>${Number(unit['Length'])}'<xx1>DEPTH</xx1></xx></h2>
                                </div>  
                                <div class="col-md-4 col-xs-6">`;

            let pName = unit['UnitType']; 

            if(pName == "Indoor Self Storage" || pName == "Premium Self Storage") {                     
                pName = "Self Storage";
            } 
                                        
            html+=`<span class='highlightFeat' style='background: #fc4d04;'>${pName}</span>
                </div>  
                <div class="col-md-4 col-xs-6">
                    ${planText}
                </div>  
                                
                <div class="col-md-12">
                    <div class="featureText">`;

                $.each(unit['CustomFields'], function (sNameKey, sName) {
                    let carryHtml ='';
                    if(sName == "Custom Unit Attribute 1") {
                        carryHtml = "<i class='far fa-user-unlock'></i> Access </br>6a – 11p";
                    } else if(sName == "Custom Unit Attribute 2") {
                        carryHtml = "<i class='fak fa-bluebird-icon-camera'></i> 24/7 Monitoring";
                    } else if(sName == "Custom Unit Attribute 3") {
                        carryHtml = "<i class='fak fa-bluebird-icon-drivethru'></i> Unload Indoors";
                    } else if(sName == "Custom Unit Attribute 4") {
                        carryHtml = "<i class='fak fa-bluebird-icon-driveupunits'></i> Loading Dock";
                    } else if(sName == "Custom Unit Attribute 5") {
                        carryHtml = "<i class='fak fa-bluebird-icon-driveupunits'></i> Drive Up Unit";
                    } else if(sName == "Automobile") {
                        carryHtml = "<i class='fak fa-bluebird-icon-vehicle'></i> Vehicle Storage";
                    } else if(sName == "Boat") {
                        carryHtml = "<i class='fak fa-bluebird-icon-boat'></i> Boat Storage";
                    } else if(sName == "Heated") {
                        carryHtml = "<i class='fak fa-bluebird-icon-heated'></i> Heated </br>Units";
                    } else if(sName == "Air Cooled") {
                        carryHtml = "<i class='far fa-snowflake'></i> Air </br>Cooled";
                    }
                                                        
                                                        
                    html+=`<span>${carryHtml}</span>`;
                })


                if(iFloor == 1) { 
                    html+=`<span><i class='fak fa-square-g-solid'></i>Ground </br>Floor</span>`; 
                } 
                else if(iFloor == 2) 
                { 
                    html+="<span><i class='fak fa-square-2-solid'></i> Level </br>Two</span>"; 
                } 
                else if(iFloor == 3) 
                { 
                    html+=`<span><i class='fak fa-square-3-solid'></i> Level </br>Three</span>`; 
                }
                else if(iFloor == 4) 
                { 
                    html+="<span><i class='fak fa-square-4-solid'></i> Level </br>Four</span>"; 
                } 
                else if(iFloor == 5) 
                { 
                    html+="<span><i class='fak fa-square-5-solid'></i> Level </br>Five</span>"; 
                } 
                else if(iFloor == 6) 
                {
                    html+="<span><i class='fak fa-square-6-solid'></i> Level </br>Six</span>"; 
                } 
                else if(iFloor == 7) 
                { 
                    html+="<span><i class='fak fa-square-7-solid'></i> Level </br>Seven</span>"; 
                }
                                        
                                        
                if(iFloor != 1) 
                { 
                    html+="<span><i class='fak fa-bluebird-icon-elevator'></i> Large Cargo Elevator</span>"; 
                }
                                        

                html+=`</div>
                    </div>
                </div>  
                </div>
                <div class="col-md-5 text-right">
                    <div class="row">
                    <div class="col-md-12 col-xs-12"><center><p>Month to Month - No Long Term Commitments</p></center></div>
                        <div class="col-md-5 col-xs-6">
                            <h2 class="priceTooltip actualMoPrice" con="${conID}" style="font-weight:bold;">$${Math.round(price)}<small>/month</small> </h2>
                                    <small style="margin-top: -10px; display: block;">Promotional Period</small>
                                </div>  
                                <div class="col-md-4 col-xs-6 text-left">`;

                if(conID == -999) {
                                            
                }
                else {
                    
                    html+=`<h2 style='text-decoration-color: #fc4d04;margin-top:10px;'>$${Math.round(unit['StandardRate'])}<small>/month</small></h2>;
                        <small style='margin-top: -10px; display: block;'>After Promotional Period</small>`;
                }

                html+=`</div>
                    <div class="col-md-3 text-center">
                        <span class="hideOnMobile popoverHoverCont" style="cursor:pointer;" data-toggle="popoverMy" title="${title}" data-placement="left" data-content='${codes}'><i style="font-size: 40px; display: block; text-align: center;" class="far fa-cubes"></i> What Will Fit?</span>
                                </div>  
                    </div>
                    <div class="row">`;

                if(unit['TotalUnitsAvailable'] > 3 || loc == "L024") {
                                    
                    html+=`<div class="col-md-6 text-center noPaddingDesktop">
                                        <a data-toggle="tooltip" data-placement="top" data-html="true" title="Save time! Pay and sign lease online in just a few minutes. Government issued ID must be shown at storage facility to get access code." href="${base_url}step_three?location=${loc}&unit=${unit['UnitID']}&type=rent&con=${conID}" class="btn btn-primary rentBtn">Rapid Rental</a>
                                        </br><span class="helpText rent"><small><i>7 Day Risk Free Trial. Easily Switch Sizes.</i></small></span>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        
                                        <tgg data-toggle="tooltip" data-placement="top" data-html="true" title="We’ll hold your unit for up to 14 days and you can finish the rental paperwork at our storage location."><a onclick="insertInfo(${unit['UnitID']});" class="btn btn-primary reserveBtn" data-toggle="modal" data-target="#reserveFormModal" >Reserve for Free</a></tgg>
                                        </br><span class="helpText reserve"><small><i>No Credit Card Required.  Takes 10 seconds or less. </i></small></span>
                                    </div>`;
                                
                }
                else {
                    html+=`<div class="col-md-12 text-center">
                            <h4 style="padding-top:20px;">Limited availability. </br>Please <a style="cursor:pointer;" onclick="$crisp.push(['do', 'chat:open'])">Chat</a> or call <a href="tel:${getData[loc]['Phone']}">${getData[loc]['Phone']}</a> for assistance.</h4>
                        </div>`;
                }

                html+=`</div>
                        </div>
                    </td>
                </tr>`;
            }

    });

    return html;
}