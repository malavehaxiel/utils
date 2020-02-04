<?php

namespace MalaveHaxiel\Utils;

use Collective\Html\FormBuilder;
use Collective\Html\HtmlBuilder;

class Utils {

    protected $html;
    protected $form;

    public function __construct(HtmlBuilder $html, FormBuilder $form)
    {
        $this->html = $html;
        $this->form = $form;
    }

    public function subtitulo($contenido, $top = 15, $bottom = 15)
    {
        echo '
            <div class="row">
                <div class="col-xs-12">
                    <div class="subtitulos" style="text-align: right; margin-top: '.$top.'px">
                        <p>'.$contenido.'</p>
                    </div>
                    <div class="sep" style="margin-bottom: '.$bottom.'px"></div>
                </div>
            </div>
        ';
    }

    public function sep($top = 15, $bottom = 15)
    {
        return '<div class="sep" style="margin-top: '.$top.'px; margin-bottom: '.$bottom.'px"></div>';
    }

    public function filterSearch($id, $style = '')
    {
        echo '
            <span id="'.$id.'" class="btn btn-defecto" style="'.$style.'">
                <span class="glyphicon glyphicon-filter" style="margin-right: 5px; vertical-align: middle"></span>
                Filtros de Busqueda
            </span>
        ';
    }

    public function btn($value = null, array $options = array())
    {
        $options['class'] = 'btn btn-color ' . @$options['class'];
        if (@$options['float'] == 'right') $options['style'] = 'float: right; margin-left: 5px;';

        if (isset($options['modal'])) {
            $options['data-toggle'] = 'modal';
            $options['data-target'] = '#' . $options['modal'];
        }

        return $this->form->button($value, $options);
    }

    public function btnPlus(array $options = array())
    {
        $options['class'] = 'glyphicon glyphicon-plus ' . @$options['class'];

        return $this->btn(null, $options);
    }

    public function btnOk(array $options = array())
    {
        $options['class'] = 'glyphicon glyphicon-ok ' . @$options['class'];

        return $this->btn(null, $options);
    }

    public function btnDefault($value = null, array $options = array())
    {
        $options['class'] = 'btn btn-defecto';
        if (@$options['float'] == 'right') $options['style'] = 'float: right; margin-left: 5px;';

        return $this->form->button($value, $options);
    } 

    public function link($url, $title = null, $attributes = [], $secure = null, $escape = true)
    {
        $attributes['class'] = 'btn btn-color';
        if (@$attributes['float'] == 'right') $attributes['style'] = 'float: right; margin-left: 5px;';

        return $this->html->link($url, $title, $attributes, $secure, $escape);
    }

    public function linkPDF($url, $title = null, $attributes = [], $secure = null, $escape = true)
    {
        $attributes['class'] = 'btn btn-color fa fa-file-pdf-o';
        if (@$attributes['float'] == 'right') $attributes['style'] .= 'float: right;';

        return $this->html->link($url, $title, $attributes, $secure, $escape);
    }

    public function linkEXCEL($url, $title = null, $attributes = [], $secure = null, $escape = true)
    {
        $attributes['class'] = 'btn btn-color fa fa-file-excel-o';
        if (@$attributes['float'] == 'right') $attributes['style'] .= 'float: right;';

        return $this->html->link($url, $title, $attributes, $secure, $escape);
    }

    public function linkDefault($url, $title = null, $attributes = [], $secure = null, $escape = true)
    {
        $attributes['class'] = 'btn btn-defecto';
        if (@$attributes['float'] != 'left') $attributes['style'] = 'float: right; margin-left: 5px;';

        return $this->html->link($url, $title, $attributes, $secure, $escape);
    }

    public function submit($value = null, array $options = array())
    {
        $options['class'] = 'btn btn-color ' . @$options['class'];
        if (@$options['float'] != 'left') $options['style'] = 'float: right; margin-left: 5px;'; 

        return $this->form->submit($value, $options);
    }

    public function submitSearch($value = null, $margin_top = '24px')
    {
        $html = '<button class="btn btn-color glyphicon glyphicon-search" title="Buscar" style="margin-bottom: 10px; margin-right: 5px; vertical-align: middle; margin-top: '.$margin_top.';"><span style="font-family:arial"> '.$value.'</span></button>';
        
        return $html;
    }

    public function btnSimpleAdd($value, array $options = array())
    {
        echo 
            '<style>.hover_link:hover{text-decoration: underline;}</style>'.
            '<span id="'.@$options['id'].'" title="'.$value.'" style="cursor: pointer; display: inline-block; margin-right: 8px">'.
                '<span class="glyphicon glyphicon-plus color-morado" title="Añadir un item"></span>'.
                '<span class="hover_link color-morado"> '.$value.'</span>'.
            '</span>';
    }

    public function btnSimpleTrash(array $options = array())
    {
        return $this->btnSimple('glyphicon glyphicon-trash', $options);
    }

    public function btnSimpleFlag(array $options = array())
    {
        return $this->btnSimple('glyphicon glyphicon-flag', $options);
    }

    public function btnSimpleEdit(array $options = array())
    {
        return $this->btnSimple('glyphicon glyphicon-pencil', $options);
    }

    public function btnSimpleMessage(array $options = array())
    {
        return $this->btnSimple('glyphicon glyphicon-comment', $options);
    }

    public function btnSimpleView(array $options = array())
    {
        return $this->btnSimple('glyphicon glyphicon-eye-open', $options);
    }

    public function btnSimpleTasks(array $options = array())
    {
        return $this->btnSimple('glyphicon glyphicon-tasks', $options);
    }

    public function btnSimpleSend(array $options = array())
    {
        return $this->btnSimple('glyphicon glyphicon-send', $options);
	}
	
	public function btnSimpleRefresh(array $options = array())
    {
        return $this->btnSimple('glyphicon glyphicon-refresh', $options);
    }

    public function btnSimpleCog(array $options = array())
    {
        return $this->btnSimple('glyphicon glyphicon-cog', $options);
    }

    public function btnSimpleOff(array $options = array())
    {
        return $this->btnSimple('glyphicon glyphicon-off', $options);
    }

    public function btnSimpleUp(array $options = array())
    {
        return $this->btnSimple('glyphicon glyphicon-arrow-up', $options);
    }

    public function btnSimpleDown(array $options = array())
    {
        return $this->btnSimple('glyphicon glyphicon-arrow-down', $options);
    }

    public function btnSimpleLeft(array $options = array())
    {
        return $this->btnSimple('glyphicon glyphicon-arrow-left', $options);
    }    

	public function btnSimpleList(array $options = array())
	{
		return $this->btnSimple('glyphicon glyphicon-list-alt', $options);
	}

	public function btnSimpleTags(array $options = array())
	{
		return $this->btnSimple('glyphicon glyphicon-tags', $options);
	}

	public function btnSimpleCreditCard(array $options = array())
	{
		return $this->btnSimple('glyphicon glyphicon-credit-card', $options);
	}
    
    public function btnSimpleSave(array $options = array())
    {
        return $this->btnSimple('glyphicon glyphicon-import', $options);
	}
	
    public function btnSimpleRemove(array $options = array())
    {
        return $this->btnSimple('glyphicon glyphicon-remove', $options);
    }
	
    public function btnSimpleCancel(array $options = array())
    {
        return $this->btnSimple('glyphicon glyphicon-remove-sign', $options);
    }

	public function btnSimpleNone(array $options = array())
	{
		return $this->btnSimple('glyphicon glyphicon-minus', $options);
	}

    public function btnSimpleQuestion(array $options = array())
    {
        return $this->btnSimple('far fa-question-circle', $options);
    }

    public function btnSimpleShoppingCart(array $options = array())
    {
        return $this->btnSimple('glyphicon glyphicon-shopping-cart', $options);
	}
	
	public function btnSimpleHandLike(array $options = array())
    {
        return $this->btnSimple('glyphicon glyphicon-thumbs-up', $options);
    }

    public function btnSimple($type, array $options = array())
    {
        if (isset($options['modal']))
            $content_modal = 'data-toggle="modal" data-target="#'.$options['modal'].'"';
        else $content_modal = null;

        echo '<span class="color-morado '.$type.' '.@$options['class']. '" '.$content_modal.' onclick="'.@$options['onclick'].'" id="'.@$options['id'].'" data-id="'.@$options['data-id'].'" style="margin-left: 3px; cursor: pointer; '.@$options['style'].'" title="'.@$options['title'].'" aria-hidden="'. @$option['aria-hidden'] .'"></span>';
    }

    public function btnSimpleLike($route, array $options = array())
    {
        
        echo '<a href="'.$route.'" class="glyphicon glyphicon-thumbs-up color-morado" onclick="'.@$options['onclick'].'" style="cursor: pointer;" title="'.@$options['title'].'"></a>';
    }

    public function linkSimpleEdit($route, array $options = array())
    {
        echo '<a href="'.$route.'" class="glyphicon glyphicon-pencil color-morado" onclick="'.@$options['onclick'].'" style="cursor: pointer;" title="'.@$options['title'].'"></a>';
    }

    public function linkSimplePdf($route, array $options = array())
    {
        echo '<a href="'.$route.'" class="glyphicon glyphicon-save-file color-morado" onclick="'.@$options['onclick'].'" style="cursor: pointer;" title="'.@$options['title'].'" target="'.@$options['target'].'"></a>';
    }

    public function linkSimpleTaks($route, array $options = array())
    {
        echo '<a href="'.$route.'" class="glyphicon glyphicon-tasks color-morado" onclick="'.@$options['onclick'].'" style="cursor: pointer;" title="'.@$options['title'].'" target="'.@$options['target'].'"></a>';
    }

    public function linkSimpleOff($route, array $options = array())
    {
        echo '<a href="'.$route.'" class="glyphicon glyphicon-off color-morado" onclick="'.@$options['onclick'].'" style="cursor: pointer; '.@$options['style'].'" title="'.@$options['title'].'"></a>';
    }

    public function linkSimpleCog($route, array $options = array())
    {
        echo '<a href="'.$route.'" class="glyphicon glyphicon-cog color-morado" onclick="'.@$options['onclick'].'" style="cursor: pointer;" title="'.@$options['title'].'"></a>';
    }

    public function linkSimpleSend($route, array $options = array())
    {
        echo '<a href="'.$route.'" class="glyphicon glyphicon-send color-morado" onclick="'.@$options['onclick'].'" style="cursor: pointer;" title="'.@$options['title'].'"></a>';
    }

    public function linkSimplePlus($route, array $options = array())
    {
        echo '<a href="'.$route.'" class="glyphicon glyphicon-plus color-morado" onclick="'.@$options['onclick'].'" style="cursor: pointer;" title="'.@$options['title'].'"></a>';
    }

    public function linkSimpleCreditCard($route, array $options = array())
    {
        echo '<a href="'.$route.'" class="glyphicon glyphicon-credit-card color-morado" onclick="'.@$options['onclick'].'" style="cursor: pointer;" title="'.@$options['title'].'"></a>';
	}
	
	public function linkSimpleUser($route, array $options = array())
    {
        echo '<a href="'.$route.'" class="glyphicon glyphicon-user color-morado" onclick="'.@$options['onclick'].'" style="cursor: pointer;" title="'.@$options['title'].'"></a>';
	}
	
	public function linkSimpleShare($route, array $options = array())
    {
        echo '<a href="'.$route.'" class="glyphicon glyphicon-share color-morado" onclick="'.@$options['onclick'].'" style="cursor: pointer;" title="'.@$options['title'].'"></a>';
    }

    public function linkSimpleOk($route, array $options = array())
    {
        echo '<a href="'.$route.'" class="glyphicon glyphicon-ok-circle color-morado" onclick="'.@$options['onclick'].'" style="cursor: pointer;" title="'.@$options['title'].'"></a>';
    }  
    
    public function linkSimpleReconsider($route, array $options = array())
    {
        echo '<a href="'.$route.'" class="glyphicon glyphicon-edit color-morado" onclick="'.@$options['onclick'].'" style="cursor: pointer;" title="'.@$options['title'].'"></a>';
    }  
    
    public function linkSimpleRecive($route, array $options = array())
    {
        echo '<a href="'.$route.'" class="color-morado fas fa-arrow-circle-down" onclick="'.@$options['onclick'].'" style="font-size: 1.6em; cursor: pointer;" title="'.@$options['title'].'"></a>';
    }

	public function linkSimpleView($route, array $options = array())
    {
        echo '<a href="'.$route.'" class="glyphicon glyphicon-eye-open color-morado" onclick="'.@$options['onclick'].'" style="cursor: pointer;" title="'.@$options['title'].'"></a>';
    }
	
    public function faker()
    {
        echo '<div id="faker"></div><script>var faker = $("#faker");</script>';
    }
}
