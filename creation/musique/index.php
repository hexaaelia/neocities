<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEX/MUSIQUE</title>
    <link href="/style.css" rel="stylesheet" type="text/css" media="all">
    <link href="/creation/musique/musique.css" rel="stylesheet" type="text/css" media="all">
    <link href="/schematic.css" rel="stylesheet" type="text/css" media="all">

</head>
<body>
<?php
    $NoCore = true;
    require '../../_php_components/navbar.php'
?>
<div id="content" class='content'>
    <h1 class="h0" aria-hidden="true" role="presentation">musicmusicmusicmusicmusicmusicmusicmusicmusicmusicmusicmusicmusicmusic<b aria-hidden="false">Musique</b></h1>
    <div class="dos_install_popup">
        <p style="text-align: center">This page is still being worked on. Pardon the dust.</p>
    </div>
    <p>I have been making music for as long as I have been making games. I've never been very good at it,
        and have in the past struggled at finishing anything. I've been trying my best to improve, and I think it's shown
        recently. Unfortunately, a lot of my older work that I'd like to put up here is on long-dead hard disks and USB sticks.</p>
    <p>Nowadays, I'm a lot more careful about my WIPs, and I'm slowly getting better. I have a lot of ideas for albums, songs,
    artists, and the like. I'm looking forward to being able to share all that, when the time comes.</p>
    <table>
        <tr >
            <td colspan="2" align="center" class="big_table_button" >
                <a href="http://hexdrgn.bandcamp.com">
                    <div style="background-image: url('/_assets/big_bc.png')">
                        <div class="big_table_button_interior">BANDCAMP</div>
                    </div>
                </a>
            </td>
        </tr>
        <tr>
            <td class="big_table_button">
                <a href="/download/mus/">
                    <div style="background-image: url('/_assets/big_back.png')">
                        <div class="big_table_button_interior"> BACK CATALOGUE</div>
                    </div>
                </a>
            </td> <!-- todo: make into an actual page -->
            <td class="big_table_button">
                <a href="https://ko-fi.com/hexdrgn">
                    <div style="background-image: url('/_assets/big_sup.png')">
                        <div class="big_table_button_interior"> SUPPORT</div>
                    </div>
                </a>
            </td>
        </tr>
    </table>
    <table id="rue">
        <tr>
            <th style="padding:5px" colspan="3">MAGIC, from RUE <i class="inline-aside">By TALIE</i></th>
        </tr>
        <tr>
            <td rowspan="3" style="margin:0;padding:0"> <img src="/_assets/wallpaper.gif" width="150" height="150" </td>
            <td colspan="2" valign="top">
                The title theme of a cancelled game. I had a falling out with the team,
                but I still think about this song, the game, and those people often.
            </td>
        </tr>
        <tr>
            <td>Status: Draft</td>
            <td>Feels: Melancholic</td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <audio preload="auto" controls="" src="/download/mus/rue_magic/rue-magic.wav" style="width: 100%"></audio>
                <div style="display:flex;justify-content: space-between">
                    <a target="_blank" href="https://hexdrgn.bandcamp.com/album/rue"><button class="dos-button">Bandcamp</button></a>
                    <a target="_blank" href="/download/mus/rue_magic/"><button class="dos-button">Alternates</button></a>
                    <button disabled="disabled" class="dos-button">Assets</button>
                </div>
            </td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <th style="padding:5px" colspan="3">LOVE, from RUE <i class="inline-aside">By TALIE</i></th>
        </tr>
        <tr>
            <td rowspan="3" style="margin:0;padding:0"> <img src="/_assets/wallpaper.gif" width="150" height="150" </td>
            <td colspan="2" valign="top">
                The theme of "The Trio" from RUE. Reminds me of a trio of my own.
            </td>
        </tr>
        <tr>
            <td>Status: Draft</td>
            <td>Feels: ...</td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <audio preload="auto" controls="" src="/download/mus/rue_love/Love.wav" style="width: 100%"></audio>
                <div style="display:flex;justify-content: space-between">
                    <a target="_blank" href="https://hexdrgn.bandcamp.com/album/rue"><button class="dos-button">Bandcamp</button></a>
                    <button disabled="disabled" class="dos-button">Assets</button>
                </div>
            </td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <th style="padding:5px" colspan="3">"BOP" <i class="inline-aside">By TALIE</i></th>
        </tr>
        <tr>
            <td rowspan="3" style="margin:0;padding:0"> <img src="/_assets/bop_cover.jpg" width="150" height="150" </td>
            <td colspan="2" valign="top">
                Something composed for a 'make anything' jam in school. I'm incredibly happy with this.
            </td>
        </tr>
        <tr>
            <td>Status: Draft</td>
            <td>Feels: Nice.</td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <audio preload="auto" controls="" src="/download/mus/bop/bop.mp3" style="width: 100%"></audio>
                <div style="display:flex;justify-content: space-between">
                    <a href="/download/mus/bop/bop.mp3"><button class="dos-button">Download</button></a>
                    <button disabled="disabled" class="dos-button">Assets</button>
                </div>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
