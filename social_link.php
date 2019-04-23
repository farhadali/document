<div class="blog-one-footer">
                                    <a style="color: rgb(25,69,156); font-weight: bold;" href="/{{App::getLocale()}}/mental-health/{{$submenu->id}}" title="Read More">{{trans('frontend.Read More')}}</a>

                                    <?php
                                     $url = url('/')."/".App::getLocale()."/mental-health/".$submenu->id;
                                    ?>
                                    <p class="social_icon_tag" title="Share">
                                        <em  class="fa fa-share-alt"  style="color: #ffffff; padding: 5px 10px;"></em>
                                    </p>
                                    <div class="social_link">
                                     <a title="Share Facebook" target="__blank" href="https://www.facebook.com/sharer/sharer.php?u={{$url}}" class="social-button " id=""><span class="fa fa-facebook-official"></span></a>
                                        <a title="Share twitter" target="__blank" href="https://twitter.com/intent/tweet?text=@if(App::getLocale()=='en')
                                    {!! wordSummery(strip_tags($submenu->description_en),100) !!}...
                                    @else
                                    {!! wordSummery(strip_tags($submenu->description_bn),250) !!}...
                                    @endif&amp;url={{$url}}" class="social-button " id=""><span class="fa fa-twitter"></span></a>
                                        <a title="Share linkedin" target="__blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{$url}}&amp;title=@if(App::getLocale()=='en')
                                    {!! wordSummery(strip_tags($submenu->description_en),100) !!}...
                                    @else
                                    {!! wordSummery(strip_tags($submenu->description_bn),250) !!}...
                                    @endif&amp;summary=@if(App::getLocale()=='en')
                                    {!! wordSummery(strip_tags($submenu->description_en),100) !!}...
                                    @else
                                    {!! wordSummery(strip_tags($submenu->description_bn),250) !!}...
                                    @endif" class="social-button " id=""><span class="fa fa-linkedin"></span></a>
                                </div>
                                </div>
