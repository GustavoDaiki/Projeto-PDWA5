<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<data>
    @foreach($registros as $item)
    <clube>
        <tecnico>{{ $item->tecnico }}</tecnico>
        <criacao>{{ $item->criacao }}</criacao>
        <titulos>{{ $item->titulos }}</titulos>
        <torcida>{{ $item->torcida }}</torcida>
        <patrocinio>{{ $item->patrocinio }}</patrocinio>
</clube>
    @endforeach
</data>
