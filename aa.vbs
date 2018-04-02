Dim WshShell
Set WshShell = CreateObject("WScript.Shell")
Do While True
     WScript.Sleep 1000*120       'µÈ´ý60Ãë
     WshShell.Run "D:\xnbjiaoyi\a52\a52jiaoyi20170915\a52jiaoyi\cron.bat",0,True
Loop