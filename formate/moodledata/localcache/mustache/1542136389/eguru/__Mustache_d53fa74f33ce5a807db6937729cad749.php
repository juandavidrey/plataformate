<?php

class __Mustache_d53fa74f33ce5a807db6937729cad749 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<footer id="footer" class="py-3 bg-dark text-light">
';
        // 'blockarrange' section
        $value = $context->find('blockarrange');
        $buffer .= $this->sectionCef190a4b081d1b4a7758d16c84c77d5($context, $indent, $value);
        // 'copyright' section
        $value = $context->find('copyright');
        $buffer .= $this->sectionE65e6a6f08695b0711f65dbccea2ca73($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '</footer>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<footer>
';
        $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        // 'output.page_doc_link' section
        $value = $context->findDot('output.page_doc_link');
        $buffer .= $this->section8d931c00f307b38e402802eb07dd7159($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</footer>
';
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section6a13349808282e42b717fe155cd42dec($context, $indent, $value);

        return $buffer;
    }

    private function section8c6cede2efa544024f83ad92698af1f3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="logo-footer">
                            <a href="{{{ config.wwwroot }}}/?redirect=0">
                                <img src="{{logourl}}" width="183" height="67" alt="Eguru">
                            </a>
                        </div>
                        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="logo-footer">
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/?redirect=0">
';
                $buffer .= $indent . '                                <img src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="183" height="67" alt="Eguru">
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section520508cdf5c57484b2482b60e2ebc8b5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="{{colclass}}">
                    <div class="footer-desc">
                        {{#footerlogo}}
                        <div class="logo-footer">
                            <a href="{{{ config.wwwroot }}}/?redirect=0">
                                <img src="{{logourl}}" width="183" height="67" alt="Eguru">
                            </a>
                        </div>
                        {{/footerlogo}}
                        <p>{{footnote}}</p>
                    </div>
                </div>
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <div class="footer-desc">
';
                // 'footerlogo' section
                $value = $context->find('footerlogo');
                $buffer .= $this->section8c6cede2efa544024f83ad92698af1f3($context, $indent, $value);
                $buffer .= $indent . '                        <p>';
                $value = $this->resolveValue($context->find('footnote'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE2aae39cd2be2f36cc43cc57f1ae1cc8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="{{colclass}}">
                    <div class="footer-nav">
                        <h4>{{footerbtitle2}}</h4>
                        <ul>
                           {{{footerlinks}}}
                        </ul>
                    </div>
                </div>
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <div class="footer-nav">
';
                $buffer .= $indent . '                        <h4>';
                $value = $this->resolveValue($context->find('footerbtitle2'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '                        <ul>
';
                $buffer .= $indent . '                           ';
                $value = $this->resolveValue($context->find('footerlinks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                        </ul>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA3b0063cbb0e9a56986ae4de5cc35a0b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li class="smedia-01">
                                <a href="{{fburl}}" target="_blank">
                                    <span class="media-icon">
                                    <i class="fa {{fb}}"></i>
                                    </span>
                                    <span class="media-name">{{fbn}}</span>
                                </a>
                            </li>
                            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <li class="smedia-01">
';
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('fburl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank">
';
                $buffer .= $indent . '                                    <span class="media-icon">
';
                $buffer .= $indent . '                                    <i class="fa ';
                $value = $this->resolveValue($context->find('fb'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></i>
';
                $buffer .= $indent . '                                    </span>
';
                $buffer .= $indent . '                                    <span class="media-name">';
                $value = $this->resolveValue($context->find('fbn'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                </a>
';
                $buffer .= $indent . '                            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5d13e16945d4ecbfb1fa51ac95f13864(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li class="smedia-02">
                                <a href="{{twurl}}" target="_blank">
                                    <span class="media-icon">
                                    <i class="fa {{tw}}"></i>
                                    </span>
                                    <span class="media-name">{{twn}}</span>
                                </a>
                            </li>
                            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <li class="smedia-02">
';
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('twurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank">
';
                $buffer .= $indent . '                                    <span class="media-icon">
';
                $buffer .= $indent . '                                    <i class="fa ';
                $value = $this->resolveValue($context->find('tw'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></i>
';
                $buffer .= $indent . '                                    </span>
';
                $buffer .= $indent . '                                    <span class="media-name">';
                $value = $this->resolveValue($context->find('twn'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                </a>
';
                $buffer .= $indent . '                            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78da2d16a704518a887a081a7e0e313e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li class="smedia-03">
                                <a href="{{gpurl}}" target="_blank">
                                    <span class="media-icon">
                                    <i class="fa {{gp}}"></i>
                                    </span>
                                    <span class="media-name">{{gpn}}</span>
                                </a>
                            </li>
                            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <li class="smedia-03">
';
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('gpurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank">
';
                $buffer .= $indent . '                                    <span class="media-icon">
';
                $buffer .= $indent . '                                    <i class="fa ';
                $value = $this->resolveValue($context->find('gp'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></i>
';
                $buffer .= $indent . '                                    </span>
';
                $buffer .= $indent . '                                    <span class="media-name">';
                $value = $this->resolveValue($context->find('gpn'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                </a>
';
                $buffer .= $indent . '                            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2434fb02ae72212c8c0f0b0387aaf594(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li class="smedia-04">
                                <a href="{{pinurl}}" target="_blank">
                                   <span class="media-icon">
                                   <i class="fa fa-youtube-play"></i>
				   {{! Modificado por Juan David Rey 29/10/18}}
                                   {{!<i class="fa {{!pi}}{{!">}}
					{{!</i>}}
                                   </span>
                                   <span class="media-name">Youtube{{!pin}}</span>
                                </a>
                            </li>
                            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <li class="smedia-04">
';
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('pinurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank">
';
                $buffer .= $indent . '                                   <span class="media-icon">
';
                $buffer .= $indent . '                                   <i class="fa fa-youtube-play"></i>
';
                $buffer .= $indent . '                                   ';
                $buffer .= '
';
                $buffer .= $indent . '                                   </span>
';
                $buffer .= $indent . '                                   <span class="media-name">Youtube';
                $buffer .= '</span>
';
                $buffer .= $indent . '                                </a>
';
                $buffer .= $indent . '                            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6dd0cdf91235c373d7d2966e106e01e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="{{colclass}}">
                    <div class="social-media">
                        <h4>{{footerbtitle3}}</h4>
                        <ul>
                            {{# fburl}}
                            <li class="smedia-01">
                                <a href="{{fburl}}" target="_blank">
                                    <span class="media-icon">
                                    <i class="fa {{fb}}"></i>
                                    </span>
                                    <span class="media-name">{{fbn}}</span>
                                </a>
                            </li>
                            {{/ fburl}}

                            {{# twurl}}
                            <li class="smedia-02">
                                <a href="{{twurl}}" target="_blank">
                                    <span class="media-icon">
                                    <i class="fa {{tw}}"></i>
                                    </span>
                                    <span class="media-name">{{twn}}</span>
                                </a>
                            </li>
                            {{/ twurl}}

                            {{# gpurl}}
                            <li class="smedia-03">
                                <a href="{{gpurl}}" target="_blank">
                                    <span class="media-icon">
                                    <i class="fa {{gp}}"></i>
                                    </span>
                                    <span class="media-name">{{gpn}}</span>
                                </a>
                            </li>
                            {{/ gpurl}}

                            {{# pinurl}}
                            <li class="smedia-04">
                                <a href="{{pinurl}}" target="_blank">
                                   <span class="media-icon">
                                   <i class="fa fa-youtube-play"></i>
				   {{! Modificado por Juan David Rey 29/10/18}}
                                   {{!<i class="fa {{!pi}}{{!">}}
					{{!</i>}}
                                   </span>
                                   <span class="media-name">Youtube{{!pin}}</span>
                                </a>
                            </li>
                            {{/ pinurl}}
                        </ul>
                    </div>
                </div>
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <div class="social-media">
';
                $buffer .= $indent . '                        <h4>';
                $value = $this->resolveValue($context->find('footerbtitle3'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '                        <ul>
';
                // 'fburl' section
                $value = $context->find('fburl');
                $buffer .= $this->sectionA3b0063cbb0e9a56986ae4de5cc35a0b($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'twurl' section
                $value = $context->find('twurl');
                $buffer .= $this->section5d13e16945d4ecbfb1fa51ac95f13864($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'gpurl' section
                $value = $context->find('gpurl');
                $buffer .= $this->section78da2d16a704518a887a081a7e0e313e($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'pinurl' section
                $value = $context->find('pinurl');
                $buffer .= $this->section2434fb02ae72212c8c0f0b0387aaf594($context, $indent, $value);
                $buffer .= $indent . '                        </ul>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4ab96cf5797be3c0aee4111a5c9bc546(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <p><i class="fa fa-phone-square"></i>{{phone}}: {{phoneno}}</p>
                        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <p><i class="fa fa-phone-square"></i>';
                $value = $this->resolveValue($context->find('phone'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ': ';
                $value = $this->resolveValue($context->find('phoneno'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section612259483321116957ccc0c2d24eef7a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <p><i class="fa fa-envelope"></i>
                            {{mail}} <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a>
                            </p>
                        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <p><i class="fa fa-envelope"></i>
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('mail'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' <a class="mail-link" href="mailto:';
                $value = $this->resolveValue($context->find('emailid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('emailid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                            </p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE02f6cf7476c1397d49b276027e6923a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="{{colclass}}">
                    <div class="footer-contact">
                        <h4>{{footerbtitle4}}</h4>
                        <p>{{address}}</p>
                        {{# phoneno}}
                            <p><i class="fa fa-phone-square"></i>{{phone}}: {{phoneno}}</p>
                        {{/ phoneno}}

                        {{# emailid}}
                            <p><i class="fa fa-envelope"></i>
                            {{mail}} <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a>
                            </p>
                        {{/ emailid}}

                    </div>
                </div>
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="';
                $value = $this->resolveValue($context->find('colclass'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <div class="footer-contact">
';
                $buffer .= $indent . '                        <h4>';
                $value = $this->resolveValue($context->find('footerbtitle4'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '                        <p>';
                $value = $this->resolveValue($context->find('address'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>
';
                // 'phoneno' section
                $value = $context->find('phoneno');
                $buffer .= $this->section4ab96cf5797be3c0aee4111a5c9bc546($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'emailid' section
                $value = $context->find('emailid');
                $buffer .= $this->section612259483321116957ccc0c2d24eef7a($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCef190a4b081d1b4a7758d16c84c77d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="footer-main">
        <div class="container">
            <div class="row">
                {{#block1}}
                <div class="{{colclass}}">
                    <div class="footer-desc">
                        {{#footerlogo}}
                        <div class="logo-footer">
                            <a href="{{{ config.wwwroot }}}/?redirect=0">
                                <img src="{{logourl}}" width="183" height="67" alt="Eguru">
                            </a>
                        </div>
                        {{/footerlogo}}
                        <p>{{footnote}}</p>
                    </div>
                </div>
                {{/block1}}
                {{#block2}}
                <div class="{{colclass}}">
                    <div class="footer-nav">
                        <h4>{{footerbtitle2}}</h4>
                        <ul>
                           {{{footerlinks}}}
                        </ul>
                    </div>
                </div>
                {{/block2}}
                {{# block3}}
                <div class="{{colclass}}">
                    <div class="social-media">
                        <h4>{{footerbtitle3}}</h4>
                        <ul>
                            {{# fburl}}
                            <li class="smedia-01">
                                <a href="{{fburl}}" target="_blank">
                                    <span class="media-icon">
                                    <i class="fa {{fb}}"></i>
                                    </span>
                                    <span class="media-name">{{fbn}}</span>
                                </a>
                            </li>
                            {{/ fburl}}

                            {{# twurl}}
                            <li class="smedia-02">
                                <a href="{{twurl}}" target="_blank">
                                    <span class="media-icon">
                                    <i class="fa {{tw}}"></i>
                                    </span>
                                    <span class="media-name">{{twn}}</span>
                                </a>
                            </li>
                            {{/ twurl}}

                            {{# gpurl}}
                            <li class="smedia-03">
                                <a href="{{gpurl}}" target="_blank">
                                    <span class="media-icon">
                                    <i class="fa {{gp}}"></i>
                                    </span>
                                    <span class="media-name">{{gpn}}</span>
                                </a>
                            </li>
                            {{/ gpurl}}

                            {{# pinurl}}
                            <li class="smedia-04">
                                <a href="{{pinurl}}" target="_blank">
                                   <span class="media-icon">
                                   <i class="fa fa-youtube-play"></i>
				   {{! Modificado por Juan David Rey 29/10/18}}
                                   {{!<i class="fa {{!pi}}{{!">}}
					{{!</i>}}
                                   </span>
                                   <span class="media-name">Youtube{{!pin}}</span>
                                </a>
                            </li>
                            {{/ pinurl}}
                        </ul>
                    </div>
                </div>
                {{/ block3}}
                {{#block4}}
                <div class="{{colclass}}">
                    <div class="footer-contact">
                        <h4>{{footerbtitle4}}</h4>
                        <p>{{address}}</p>
                        {{# phoneno}}
                            <p><i class="fa fa-phone-square"></i>{{phone}}: {{phoneno}}</p>
                        {{/ phoneno}}

                        {{# emailid}}
                            <p><i class="fa fa-envelope"></i>
                            {{mail}} <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a>
                            </p>
                        {{/ emailid}}

                    </div>
                </div>
                {{/block4}}
            </div>
        </div>
    </div>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="footer-main">
';
                $buffer .= $indent . '        <div class="container">
';
                $buffer .= $indent . '            <div class="row">
';
                // 'block1' section
                $value = $context->find('block1');
                $buffer .= $this->section520508cdf5c57484b2482b60e2ebc8b5($context, $indent, $value);
                // 'block2' section
                $value = $context->find('block2');
                $buffer .= $this->sectionE2aae39cd2be2f36cc43cc57f1ae1cc8($context, $indent, $value);
                // 'block3' section
                $value = $context->find('block3');
                $buffer .= $this->section6dd0cdf91235c373d7d2966e106e01e7($context, $indent, $value);
                // 'block4' section
                $value = $context->find('block4');
                $buffer .= $this->sectionE02f6cf7476c1397d49b276027e6923a($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE65e6a6f08695b0711f65dbccea2ca73(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="footer-foot">
    <div class="container">{{{copyright}}}</div>
</div>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="footer-foot">
';
                $buffer .= $indent . '    <div class="container">';
                $value = $this->resolveValue($context->find('copyright'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8d931c00f307b38e402802eb07dd7159(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <p class="helplink">{{{ output.page_doc_link }}}</p>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <p class="helplink">';
                $value = $this->resolveValue($context->findDot('output.page_doc_link'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a13349808282e42b717fe155cd42dec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_boost/loader\']);
require([\'theme_boost/drawer\'], function(mod) {
    mod.init();
});
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'theme_boost/loader\']);
';
                $buffer .= $indent . 'require([\'theme_boost/drawer\'], function(mod) {
';
                $buffer .= $indent . '    mod.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
