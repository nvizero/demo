$("document").ready(function () {

     
    
    //html activity
    $("#multi_select").change(function () {
        $(".multi_select_html").html("");
        var str = "";
        $("select option:selected").each(function () {
            str += $(this).val() + " ";
        });
        let input_type = parseInt(str.trim());

        let generate_tag_num = 0;

        if (input_type === 4) {
            $(".multi_select_html").append("<input type='button'  class='btn btn-sm btn-primary generate' value='產生'>");
            generate_tag_num = 1;
        } else {
            $(".multi_select_html").append("<b>幾個 :</b> <input type=number class='" + input_type + "_jquery' style='width:50px;'> " +
                "<input type='button'  class='btn btn-sm btn-primary generate' value='產生'>");
        }

        $(".generate").bind("click", function () {
            if (input_type === 4) {
                generate_tag_num = 1;
            } else {
                generate_tag_num = parseInt($("." + input_type + "_jquery").val().trim());
            }

            let html = "";
            if (generate_tag_num > 0) {
                let checkbox_count = parseInt($(".checkbox_count").val().trim());
                let radio_count = parseInt($(".radio_count").val().trim());
                let required_count = parseInt($(".required_count").val().trim());
                let around = parseInt($(".around").val().trim());
                //type類型, type_num類型數量, around第幾輪 , type_around類型的第幾輪 ,required_count 必填                
                var genHtml = new GenHtml(input_type, generate_tag_num, around, required_count);
                html += genHtml.generate_html_tag()

                $(".jquery_generate_html").append(html);
                $(".required_count").val(required_count + 1);

                if (input_type === 2) {
                    $(".radio_count").val(radio_count + 1);
                } else if (input_type === 3) {
                    $(".checkbox_count").val(checkbox_count + 1);
                }

                $(".around").val(around + 1);

            } else {
                alert("請輸入整數");
            }
        });
    });


    
});




class GenHtml {
    illustrate_text = ["", "文字", "單選", "多選", "文字區塊"];
    html_cons = ["", "text", "radio", "checkbox", "textarea"];
    html = '';
    type_around = 1;
    //type類型, type_num類型數量, around第幾輪  ,required_count 必填
    constructor(type, g_type_num, around, required_count) {
        this.type = type;
        this.g_type_num = g_type_num;
        this.around = around;
        this.required_count = required_count;
        this.tag_name = this.html_cons[type];
        this.tag_name_chinese = this.illustrate_text[type];
    }
    //type_around類型的第幾輪
    set_type_around(type_around) {
        this.type_around = type_around;
    }
    //title footer
    g_area_footer() {
        return "</div></div>";
    }
    //title herader
    g_area_header() {
        return '<div class="row mb-3">'+
            '<label for="example-text-input" class="col-sm-3 col-form-label">'+                        
            `${this.tag_name_chinese}主說明:`+            
            `<input type="text" name="${this.tag_name}_title[around=${this.around}] style="width:50px;"  />`+
            `</label>` +
            `<div class="col-sm-9 col-form-label">`;
    }    

    //HTML 類型 輸入
    //info[around=1,type=text,input_name=text1_2]
    g_input(type_around) {
        return ` 說明${type_around} : `+
            `<input type="text" name="${this.tag_name}[around=${this.around},input_name=${this.around}_${type_around}]" style="width:80px;" /> `;
    }

    g_required(i) {
        let required_name = `${this.html_cons[this.type]}_${this.required_count}`;
        if (this.type === 1 || this.type === 4) {
            return `<b> 必填: <input type='checkbox' name='required[${required_name}_${i}]' /></b> <br>`;
        } else {
            return `<b> 必填: <input type='checkbox' name='required[${required_name}]' /></b> `;
        }
    }

    generate_html_tag() {        
        //如果是 radio or checkbox        
        if (this.type === 2 || this.type === 3) {
            this.html += this.g_area_header()
        }
        
        //產生input         
        for (var acount = 1; acount <= this.g_type_num; acount++) {
            this.set_type_around(acount);
            this.html += this.g_input(acount);            
            //如果是 text or teatarea            
        }        
        if (this.type === 2 || this.type === 3) {
            // this.html += this.g_required(1)
            this.html += this.g_area_footer()
        }
        this.html += "<hr/>";
        return this.html;
    }
}