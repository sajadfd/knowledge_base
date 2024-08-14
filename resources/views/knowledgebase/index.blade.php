<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knowledge Base</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <!-- Menu -->
            <div class="col-md-3">
                <ul>
                    @foreach($themes as $theme)
                    <li>
                        <a href="{{ route('knowledgebase.show', ['themeId' => $theme->id, 'subthemeId' => $theme->subthemes->first()->id ?? 0]) }}"
                            class="{{ $theme->id == $selectedTheme->id ? 'text-warning' : '' }}">
                            {{ $theme->name }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Subtheme List -->
            <div class="col-md-3">
                @if($selectedTheme && $selectedTheme->subthemes)
                <ul>
                    @foreach($selectedTheme->subthemes as $subtheme)
                    <li>
                        <a href="{{ route('knowledgebase.show', ['themeId' => $selectedTheme->id, 'subthemeId' => $subtheme->id]) }}"
                            class="{{ $subtheme->id == $selectedSubtheme->id ? 'text-warning' : '' }}">
                            {{ $subtheme->name }}
                        </a>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>

            <!-- Content -->
            <div class="col-md-6">
                @if($content)
                <p>{{ $content->text }}</p>
                @else
                <p>No content available for this subtheme.</p>
                @endif
            </div>
        </div>
    </div>
</body>

</html>