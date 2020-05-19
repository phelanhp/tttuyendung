<div id="sidebar-wrapper" class="collapse sidebar-collapse">

		<nav id="sidebar">

			<ul id="main-nav" class="open-active">
				@if(config_menu_merge())
                    @foreach(config_menu_merge() as $menu)
                    <?php $group = ( $menu['group'] != null) ? TRUE : FALSE;?>
                        @if($group)
                        	<li class="dropdown @yield($menu['active'])">
								<a href="javascript::void(0)" class="@yield($menu['active'])">
									<i class="{{ $menu['icon'] ?? '' }}"></i><span class="hide-menu">
									{{ $menu['name'] ?? '' }}</span>
									<span class="caret"></span>
								</a>

								<ul class="sub-nav collapse" aria-expanded="false" >
									@foreach($menu['group'] as $k => $children)
									<li class="@yield($children['active'])">
										<a href="{{ $children['route'] ? $children['route'] : '#' }}">
											<i class="$children['icon']"></i>
											 {{ $children['name'] }}
										</a>
									</li>
									@endforeach
								</ul>
							</li>
						@else
							<li class="{{ $menu['active'] }}">
								<a href="{{ $menu['route'] ? $menu['route'] : '#' }}" class="@yield($menu['active'])">
									<i class="{{ $menu['icon'] ?? '' }}"></i>
									{{ $menu['name'] }}
								</a>
							</li>
                        @endif
					@endforeach
                @endif
			</ul>

		</nav> <!-- #sidebar -->

	</div> <!-- /#sidebar-wrapper -->
