<?php
echo '{
    "CONFIG":[{
        "Default_checklist": 2,
        "MasterStylesheet": "html , body {background-color:#D9D9D9;font-family: inherit;font-size:21px;margin:20px;text-align:center;} table { page-break-inside:avoid }  button{border-radius:4px;background-color:#5795BA;border:none;color:#fff;margin-top: 18px;}",
        "Language": "ENG",
        "Department": 1,
        "Company": "ACBryne",
        "User": "username@company.com",
        "Logo": "(Base64 encoded image)",
        "Accesslevel": 3,
        "Use HTTPS": 0,
        "Timeout": 3600,
        "Pincode": "0000"
    }],
    "PRODUCT": [
    ],
    "CHECKLIST_TEMPLATES": [
        {
            "ChecklistID": 1,
            "Name": "Menu",
            "Logo": "(Base64 encoded image)",
            "Product": 0,
            "Local TimeToLive": 1728000,
            "Company": "ACBryne",
            "Department": 1,
            "Stylesheet": "input{font-size: 24px; border-radius: 10px;margin-top:10px;width:80%;height: 29px;text-align:center;margin-top: 29px;margin-bottom: 22px;} body{color: #000000;font-size: 49px;font-family: serif;}button {border-radius: 4px;background-color: #5795BA;border: none;color: #fff;width:60%;margin-top: 18px;height: 33px;font-size: 23px;}",
            "Deliverytype": "Show all",
            "Questions": [{
                    "Access level": 0,
                    "Input validation rule": "",
                    "Unit": "",
                    "Stylesheet": "",
                    "Server updated": null,
                    "Answer": "VP_install",
                    "Timestamp last change": 0,
                    "Last change by": "",
                    "Sequence#": 100,
                    "Display rule": "",
                    "Text_ID": [{
                            "ID": 2,
                            "ENG": "Open order VP_install",
                            "NOR": "Åpne ordre VP_install"
                        }],
                    "Helptext": [{
                            "ID": 2,
                            "ENG": "",
                            "NOR": ""
                        }],
                    "Required": true,
                    "Type": "OpenChecklist"
                }, {
                    "Access level": 0,
                    "Input validation rule": "",
                    "Unit": "",
                    "Stylesheet": "",
                    "Server updated": null,
                    "Answer": "Open ordernr",
                    "Timestamp last change": 0,
                    "Last change by": "",
                    "Sequence#": 120,
                    "Display rule": "",
                    "Text_ID": [{
                            "ID": 2,
                            "ENG": "Open new order",
                            "NOR": "Åpne ny ordre"
                        }],
                    "Helptext": [{
                            "ID": 2,
                            "ENG": "",
                            "NOR": ""
                        }],
                    "Required": true,
                    "Type": "OpenChecklistButton"
                },
                {
                    "Access level": 0,
                    "Input validation rule": "",
                    "Unit": "",
                    "Stylesheet": "",
                    "Server updated": null,
                    "Answer": "99",
                    "Timestamp last change": 0,
                    "Last change by": "",
                    "Sequence#": 200,
                    "Display rule": "",
                    "Text_ID": [{
                            "ID": 2,
                            "ENG": "Open order 99",
                            "NOR": "Åpne ordre 99"
                        }],
                    "Helptext": [{
                            "ID": 2,
                            "ENG": "",
                            "NOR": ""
                        }],
                    "Required": true,
                    "Type": "OpenChecklistButton"
                }]
        },
        {
            "ChecklistID": 2,
            "Name": "Open ordernr",
            "Logo": "(Base64 encoded image)",
            "Product": 0,
            "Local TimeToLive": 1728000,
            "Company": "ACBryne",
            "Department": 1,
            "Stylesheet": "",
            "Deliverytype": "Show all",
            "Questions": [{
                    "Access level": 0,
                    "Input validation rule": "",
                    "Unit": "",
                    "Stylesheet": "",
                    "Server updated": null,
                    "Answer": null,
                    "Timestamp last change": 0,
                    "Last change by": "",
                    "Sequence#": 100,
                    "Display rule": "",
                    "Text_ID": [{
                            "ID": 2,
                            "ENG": "Order number",
                            "NOR": "Ordre nummer"
                        }],
                    "Helptext": [{
                            "ID": 2,
                            "ENG": "Input ordernumber of the order you want to fill in",
                            "NOR": "Skriv inn ordrenummer du vil fylle ut"
                        }],
                    "Required": true,
                    "Type": "OpenChecklist"

                }]
        }],
    "CHECKLISTS": [
        {
            "ChecklistID": 3210,
            "Name": "AC installation",
            "Logo": "(Base64 encoded image)",
            "Product": 0,
            "Local_TimeToLive": 172800,
            "Company": "ACBryne",
            "Department": 1,
            "Stylesheet": "input{font-size: 24px; border-radius: 7px;margin-top:10px;width: 80%;height: 29px;text-align:center;} body{color: #000000;font-size: 30px;font-family: serif;}button {border-radius: 7px;background-color: #5795BA;border: none;color: #fff;width: 80%;margin-top: 18px;height:30px;}",
            "Deliverytype": "Show all",
            "Questions": [{
                    "Access_level": 0,
                    "Input_validation_rule": "",
                    "Unit": "",
                    "Stylesheet": "{background-color:#fff; border-radius:4px;padding:20px;}",
                    "Server_updated": null,
                    "Answer": null,
                    "Timestamp_last_change": 0,
                    "Last_change_by": "",
                    "Sequence": 100,
                    "Display_rule": "",
                    "Text_ID": [{
                            "ID": 2,
                            "ENG": "Enter temperature 1",
                            "NOR": "Skriv inn temperatur 1"
                        }],
                    "Helptext": [{
                            "ID": 2,
                            "ENG": "",
                            "NOR": ""
                        }],
                    "Required": true,
                    "Type": "Text"
                }, {
                    "Access_level": 0,
                    "Input_validation_rule": "",
                    "Unit": "",
                    "Stylesheet": "{background-color:#759DA5; border-radius:4px;padding:20px;}",
                    "Server_updated": null,
                    "Answer": 22,
                    "Timestamp_last_change": 0,
                    "Last_change_by": "",
                    "Sequence": 120,
                    "Display_rule": "",
                    "Text_ID": [{
                            "ID": 2,
                            "ENG": "Room temperature",
                            "NOR": "Rom temperatur"
                        }],
                    "Helptext": [{
                            "ID": 2,
                            "ENG": "",
                            "NOR": ""
                        }],
                    "Required": true,
                    "Type": "Number"
                },
                {
                    "Access_level": 0,
                    "Input_validation_rule": "",
                    "Unit": "",
                    "Stylesheet": "{background-color:#D1D1AF; border-radius:4px;padding:20px;}",
                    "Server_updated": null,
                    "Answer": "E24065",
                    "Timestamp_last_change": 0,
                    "Last_change_by": "",
                    "Sequence": 200,
                    "Display_rule": "",
                    "Text_ID": [{
                            "ID": 2,
                            "ENG": "Serial number",
                            "NOR": "Serienr"
                        }],
                    "Helptext": [{
                            "ID": 2,
                            "ENG": "",
                            "NOR": ""
                        }],
                    "Required": true,
                    "Type": "Text"
                },
				{
                    "Access_level": 0,
                    "Input_validation_rule": "",
                    "Unit": "",
                    "Stylesheet": "{background-color:#666666; border-radius:4px;padding:20px;}",
                    "Server_updated": null,
                    "Answer": "E24065",
                    "Timestamp_last_change": 0,
                    "Last_change_by": "",
                    "Sequence": 101,
                    "Display_rule": "",
                    "Text_ID": [{
                            "ID": 2,
                            "ENG": "Indore unit",
                            "NOR": "Serienr"
                        }],
                    "Helptext": [{
                            "ID": 2,
                            "ENG": "",
                            "NOR": ""
                        }],
                    "Required": true,
                    "Type": "Text"
                },
				{
                    "Access_level": 0,
                    "Input_validation_rule": "",
                    "Unit": "",
                    "Stylesheet": "{background-color:#76838B; border-radius:4px;padding:20px;}",
                    "Server_updated": null,
                    "Answer": "E24065",
                    "Timestamp_last_change": 0,
                    "Last_change_by": "",
                    "Sequence": 102,
                    "Display_rule": "",
                    "Text_ID": [{
                            "ID": 2,
                            "ENG": "Out dore unit",
                            "NOR": "Serienr"
                        }],
                    "Helptext": [{
                            "ID": 2,
                            "ENG": "",
                            "NOR": ""
                        }],
                    "Required": true,
                    "Type": "Text"
                },
				{
                    "Access_level": 0,
                    "Input_validation_rule": "",
                    "Unit": "",
                    "Stylesheet": "{background-color:#3E5158; border-radius:4px;padding:20px;}",
                    "Server_updated": null,
                    "Answer": "E24065",
                    "Timestamp_last_change": 0,
                    "Last_change_by": "",
                    "Sequence": 103,
                    "Display_rule": "",
                    "Text_ID": [{
                            "ID": 2,
                            "ENG": "Product type",
                            "NOR": "Serienr"
                        }],
                    "Helptext": [{
                            "ID": 2,
                            "ENG": "",
                            "NOR": ""
                        }],
                    "Required": true,
                    "Type": "Number"
                },
				{
                    "Access_level": 0,
                    "Input_validation_rule": "",
                    "Unit": "",
                    "Stylesheet": "{background-color:#C4CA60; border-radius:4px;padding:20px;}",
                    "Server_updated": null,
                    "Answer": "E24065",
                    "Timestamp_last_change": 0,
                    "Last_change_by": "",
                    "Sequence": 104,
                    "Display_rule": "",
                    "Text_ID": [{
                            "ID": 2,
                            "ENG": "Image",
                            "NOR": "Serienr"
                        }],
                    "Helptext": [{
                            "ID": 2,
                            "ENG": "",
                            "NOR": ""
                        }],
                    "Required": true,
                    "Type": "Image"
                }
				
				]
        }
    ]
}';

?>