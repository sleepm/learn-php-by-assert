<table>
<?php
$a = new DirectoryIterator('./wordnet-lite/' );
foreach($a as $file )
    {
    if( $a->valid() ){
        echo '<tr><td>getFilename()</td><td> '; echo ($file->getFilename()); echo '</td></tr>';
        echo '<tr><td>getBasename()</td><td> '; echo ($file->getBasename()); echo '</td></tr>';
        echo '<tr><td>isDot()</td><td> '; echo ($file->isDot()); echo '</td></tr>';
        echo '<tr><td>__toString()</td><td> '; echo ($file->__toString()); echo '</td></tr>';
        echo '<tr><td>getPath()</td><td> '; echo ($file->getPath()); echo '</td></tr>';
        echo '<tr><td>getPathname()</td><td> '; echo ($file->getPathname()); echo '</td></tr>';
        echo '<tr><td>getPerms()</td><td> '; echo ($file->getPerms()); echo '</td></tr>';
        echo '<tr><td>getInode()</td><td> '; echo ($file->getInode()); echo '</td></tr>';
        echo '<tr><td>getSize()</td><td> '; echo ($file->getSize()); echo '</td></tr>';
        echo '<tr><td>getOwner()</td><td> '; echo ($file->getOwner()); echo '</td></tr>';
        echo '<tr><td>$file->getGroup()</td><td> '; echo ($file->getGroup()); echo '</td></tr>';
        echo '<tr><td>getATime()</td><td> '; echo ($file->getATime()); echo '</td></tr>';
        echo '<tr><td>getMTime()</td><td> '; echo ($file->getMTime()); echo '</td></tr>';
        echo '<tr><td>getCTime()</td><td> '; echo ($file->getCTime()); echo '</td></tr>';
        echo '<tr><td>getType()</td><td> '; echo ($file->getType()); echo '</td></tr>';
        echo '<tr><td>isWritable()</td><td> '; echo ($file->isWritable()); echo '</td></tr>';
        echo '<tr><td>isReadable()</td><td> '; echo ($file->isReadable()); echo '</td></tr>';
        echo '<tr><td>isExecutable(</td><td> '; echo ($file->isExecutable()); echo '</td></tr>';
        echo '<tr><td>isFile()</td><td> '; echo ($file->isFile()); echo '</td></tr>';
        echo '<tr><td>isDir()</td><td> '; echo ($file->isDir()); echo '</td></tr>';
        echo '<tr><td>isLink()</td><td> '; echo ($file->isLink()); echo '</td></tr>';
        echo '<tr><td>getFileInfo()</td><td> '; echo ($file->getFileInfo()); echo '</td></tr>';
        echo '<tr><td>getPathInfo()</td><td> '; echo ($file->getPathInfo()); echo '</td></tr>';
        //echo '<tr><td>openFile()</td><td> '; echo ($file->openFile()); echo '</td></tr>';
        echo '<tr><td>setFileClass()</td><td> '; echo ($file->setFileClass()); echo '</td></tr>';
        echo '<tr><td>setInfoClass()</td><td> '; echo ($file->setInfoClass()); echo '</td></tr>';
        $a->next();
        }
}
?>
</table>
