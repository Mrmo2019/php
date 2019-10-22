<style type="text/css">
#tour .center {
text-align: center;
}
#tour .center h2 {
margin: 10px 0;
font-size: 45px;
letter-spacing: 2px;
color: #666;
}
#tour .center p {
color: #666;
margin: 10px 0;
}
#tour figure {
border: 1px solid #ddd;
display: inline-block;
padding: 4px;
border-radius: 4px;
width: 380px;
margin: 15px 12px;
text-align: left;
position: relative;
}
#tour figure img {
vertical-align: middle;
}
#tour figure figcaption {
color: #777;
font-size: 14px;
padding: 7px 0 5px 0;
letter-spacing: 1px;
line-height: 1.5;
}
#tour .title {
color: #333;
font-weight: normal;
}
#tour .price {
color: #f60;
font-size: 14px;
}
#tour .price strong {
font-size: 20px;
letter-spacing: 1px;
}
#tour .sat {
color: #999;
font-size: 13px;
font-style: normal;
float: right;
position: relative;
right: 5px;
top: 5px;
}
#tour .type {
width: 90px;
height: 25px;
line-height: 25px;
text-align: center;
border-bottom-right-radius: 4px;
background-color: #59b200;
font-size: 14px;
color: #fff;
letter-spacing: 1px;
position: absolute;
top: 4px;
left: 4px;
}
</style>
<div id="tour">
<section class="center">
                   <h1>最新产品</h1>
                        <span></span>
                        {hkcms:content action="category" catid="7"  order="listorder asc"}
                            {volist name="data" id="vo"}
                                <a href="{$vo.url}" style="font-size: 100px;">{$vo.catname}</a>
                            {/volist}
                        {/hkcms:content}
                        <a class="rightMore" href="{:url('content/Index/lists',['catid'=>7])}"></a>
                    
                   </section>
               </div>
{hkcms:position action="position" posid="2" order="listorder asc"}
                        {volist name="data" id="vo"}
                        <div id="tour">
                            <figure>
                            <a title="PRO-001" href='{$vo.data.url}'>
                                <span class="imgLink-hover"><span class="hover-link"></span></span>
                                <img src="{$vo['data']['thumb']?$vo['data']['thumb']:$config_siteurl.'statics/default/images/dpic.gif'}" alt="{$vo.data.title}" 
                                style="width: 300px;" />
                            </a>
                            <a class="productTitle" href="{$vo.data.url}" title="{$vo.data.title}">
                                {$vo.data.title}
                            </a>
                        </figure>
                        </div>
                        {/volist}
                        {/hkcms:position}
