<div class="sidebar nobottommargin">
    <div class="sidebar-widgets-wrap">

        <div class="widget widget_links clearfix">

            <h4>Shop Categories</h4>
            <ul>
            @foreach ($categorylist as $category)
                <li><a href="{{ url('mens', ['slug'=>$category->slug]) }}">{{ $category->name}}</a></li>
            @endforeach
            </ul>

        </div>
    </div>
</div>