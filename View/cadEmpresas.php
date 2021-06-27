
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<body>

    <form class="form-horizontal container-fluid" action="../Controller/Usuarios.php" method="post">
        <fieldset>
            <div class="panel panel-primary">
                <div class="panel-heading">Central de Serviços</div>

                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-md-4 control-label">

                        </div>
                        <div class="form-group">   
                            <div class="col-md-4 control-label">
                                <center> <h1>Cadastro de Cliente</h1> <img id="logo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUMAAACcCAMAAADS8jl7AAABdFBMVEX29vj19ff09Pbz8/Xy8vRHZZD/hyg0MTIAqlQAsfP5+fvv7/H/8QD8/P4xLi//LjQrKCklISLj4+Xe3d8oJCVIRUapqKpfd5w6Nzj/gxLo6vBTUVLS0dNhX2Dp6evi4uSQj5DHx8gdGRpAPj94dniGhIWwsLEAqE0AsPDNzM68vL2enp/09PoArvNramtMSksYExT/Iyv3LzX08918fH3z8tKXlpjiMjb98SH37+vi7vDX6+YArmAAte6LiYsArff5nKD2xMb7kpT9rXX/jTL538/D49qv3vBRwO+t3syGz69uyvE/vHyf1r1RvIhoyOttxqAts293x6C34vLT6/R5zfOW2O+Azqv48nBPvoX08rT5tbj+VV368YON1fL98zwVuer9eHz29Jn11tr781b9cHj/Exb+YWj+Q0n30tX388f4v8LcNDn09Of68nn6x6ensMKRnbX/l0pwhaP+o2OgrL/5tIb60bc2W4r24tX+nlP9rHCHm8e5AAAZv0lEQVR4nO2diX/TRr7AdYGTUSRGtiycWpIP2Uosx3YA10vS4t4cpTcUuqWvpe1u2+1uH9CD0n3//JtDpzU6HAeSkPw+BWJZlma+/l3zm59STpLEpAgp4QU+TzgikrykSNkiFg4pf0T+kF6YlGB4+Ahz+JVCeKwIrs5waYT5/NIEl0X4wgkeEsNltHBFfseRYYlBHyrCfD1c1REeBcEyDA8R4ZJ2fBJ0sBTDw9TCpex4eYQnluEL9YXHEiG32rCXQLiUFZ8kgsUM8wZ9eAjLpNXH0xeWYHgoWljA74Rr4UoMS2vhC2B4lAi5gw+8HMLD4XecCRYwPAQtPBSGuQCPHGEuw1URvhAdPHqEBQy57JGX0MKlGbIRCnnDOFYMl/n+uWKEhfxKMzzmSsjlMswbeKEWLm/HB8lojgXCAzHkhHyEB9LBA2nhiWVYqIUH0cEDaeHxYrjU+PMQHlAHD0TwqNkFcgBvmImwFL9Ds+OjJhdJ1hwyR56BcAV+B9LCo+YWl4xJZI+diVD0Gb52fWdZhkwNPHkM2TNgJ7YshJJw4yblc2vrfVFcSgdPPsFMhsyRC8SQUxTF/dvbN0Wf4dYHOar4ciJciiErL5SkvRvXRiPKULi1tba19r4glPWDJzihiclSDKVFfgjb/u0RktuE4c6HW2tra1sfvcZQxdII85fpxxAhmyFj3AsIQzI3rm2PttdHH1Nbvo8Zrm29/mHaK5a245OmhaUZLq5OKJe9/Y9H26P1UcjwE8JwbWtBFcvb8QkkiBmWtOPQF8bYYE+4jmV0j9qyzxBR/PSWJOYyPJgSnmSGkRaGYJAn3F73ZXSDMvwoYIhCyydEFctr4EnVQo4rMZG4L4wr4fYoQLi9foOEYvHvIUNkz0QVl0F4MgmyGOZpYUwJPw6VEIvP8IO1mGytfba/c4gITw5D1tiFlBbeuLY+igiOtu8wGGKveH1HeHnjcSAlphKWGUIlvHsb5TPbCYbEH+5/urYAce3+fpn2vJOshYUMWb4Q5YQoo9kexW35LmYo7r++tbZI8YPrnFAE8ATzw1I4najY5RPcv72ekmuZDPHaL+YVTwNDxvgXtBApYQrhyGf4GoPhGi5D0BTq5SS4yLBIC8nqOK2Go2v7lGGaoK+K0g6b32lg6CPcCZVwfTuNcH30cJ+Y+XWGGlJV/Og1Vib6UhBcYMjSQkneQRIo4TpDCxHDm/kMsSp+yPMvJ8EkQxZCrISUIX8HV2iY4jMUshlmqeKRIAQArPB2WnImRLXQZ4gWJm+sZ0H0GXIfZjMkFbGUKmaRA0S454NQcg1XyH5b9AzXXuqCeRPyw8kOCih7N9hW7DO8jYs0Ip/LEKvifjy0ZDwHyAFF7riG4XZkRVkRF1PkyW5dznm7t9uoLaWJBQiJHspYCTPMmDL8nKTRBQwRxNdvcXyBDgLbtbpdDUm3O3FX5cWE1IRNKeftnl4/JIZ0jUyiMc/KCZMMecyQez+fYcwrZgDkOcWb6FDv7mroP12bLjMVBeRoVxzSC2OIfKEU7Ji8kUswYvhZEUPsFbEqZiIEQwi1yWyAaNjevLEMQ9mYtMud+KIYRjXoewVKiOXr0gyRKn6yz+GAyzTkoQobQ5kERgAU2ywfVYCpa+1SU39uDBcMOajjC/s3sSMsoniP+sMyDElFDLDVUHEhbHQAF+Y0S0wFmKp+tAwXDTmxOs5KC0PZvkf0UPioFEMkn+0zLblVV1WPPXygKLG0jf4I8MHwfcIQBO/Qv0FwuhKdmcnQv1ySYfwe+QwXJkO0UJaEuzcLrZgyvEEYih+UY4iTHKYlz6A+Z1qvIg9cwzMDvRSqLRnNrua5rsmTY2K12qnAfrXaqorITVRbNgd40xtIBK+NciW3Yyt5DPHlSD4VZ+gftPNzLKYvpOFYRqvjkgzvEFuWPi1ny2vvCyxviBI36JiMxBpIxgSiZKcyHlD9qtUrbVDrqZqmq2M8X2A6jlOpNByn0awBUG2iaFQbqxpO9Hhz6ujo07BuCNkMgdlroLNg04sxRAcr5JPIRS/HMPCFdx9mLI8XAKI/dylDVukrjfDTW2x3CAYQ9hhGBqo9qDWaVh3qjkuiTa2htQcTbWI1VQgRNDRZlApVKrDb3a2YiKGj92rNXV1XEdBOo6s5TWsCIZzxWQyB5+i6Y1l1TR1OA4bAdTSIbtLQ9J6dA3ERIcdH28K4xlCC4mh0rTxDkiEyEfLA0PUhY6hIMWDflOWqW4cO1kTEEI4nE8+W7Y4F4RyfMxi4FTgdDDooLQLVOuz1K0PT9JBJe3rPa8my7TpIywGbIQKN8oEaOstrqo5KGQKvojfRTWRzim5SwJCphURwXlMUUNZHDylCUbhVCBHZsZjVTQOmUGNEFAWljG0Ro1M6jj6VCEMVTmrI16NI4qgOsWalVtHbCgkjiKE6aXr+i4HH4agAgIEUUWEztC3Y8MhZitmElCFo1eHEJAflHmyY2RCFRI8Ql0SIo0qhHo5u3uX9Sj/3WkFUQXbMTgwJwzHU0iMFdh02fUuSqJlhhkH8BnNddTGZWG6DGcIwz+GD+FBzYI/NEHjoawp/bvgMZ7rq0WACBhXYzo4rSYYhwp2dHbpIkb7ezstttte3P5eCPSdB4PY/yS3dfPRa4AqBlGKoWFBLJ2aKoWtugMGAmB225QCr4qpwyGDoDJJXQjmK1ISWwGTI9fRQzwDSScJQbuqWH0rQMd3KTinjlhzTQr/sSsqGD/MqNuv3xHDbjnwf769lUdxauy/53xaa8Sy14FOYeqhMkR35FSTBVVWDMpz6UwIopSHokgxDxuS1Isot0zMcaIlMhvYERohkX9lNlCsFe0n2GE6qmcac8IaRIe/IIcS89fLo2h1/+1gI6jEgyynG7BhFvIa1kN8gWj2mP7RUFJN9mSClIwz1Pp/PcBwyAcKgPW42VK2rqmyGoKbCXpSC09wGdHS1HtzXCuJMAcOEL9x59YsrOxLtIhTZdZsRcYUhQjlY8oDrzDRx6++RHcszXR+nGc5YcVlqqhWc3hHRoTajDOcFDHtBlRXlkVpXg42JNc7SQ5QZ6f2Ioa+HnlZRtfDGek5NkY1Q3nl14+qXviaiWIFDy2KExp2bMl3jCTz34Ku3gtIgt59e821t3d8PlbA21iswyZBMxdNj6hOIiJKNoRHJYDmGoNVEebjRqSHbbmYzhCyG6HOR5NS2o2kkAjJiuLHxP1KwuS7wX69vJ5RxtP3G6J7fwSBw4puXLl16kw8z9vsLTnHr9VsgROg5sJJgGEzFdtR0CgEs6FSVSGh+WJ5hW0cuFK+1gZzJsKYzbRnF4phkIgzmwSURUoYb3/wcdijs3XkYL2WPro0e3uD8xgXO/vbShQsXLn0b2vNOwilubX0Qt2OoVhIMo7lMYejnQkExBS7G2CUYylYQXgCOHGyGtgObcviCxmVgNiKHkC/pcBJjuLHx3U5AkSObUv6yZXu0/vBu0IcMvv8KI0QQv/o+gMjFneLW/ZAXaFl6pZLF0EQeyFhQRMWF+rwMQ5xjpxiC1gSO5fDMjLgsWLASfE/oNNXPbaBTrgbGRhgy3PjHlVAVwY1rb2yTaiJCeVPifSsH/75MESKIP/0LCItOEdtxQIvaMWVIs9IkL5TWQiOsGgJc3Ec5ttoIJ8hJeQynaYZVpHxED4E8hWFcniSXv2iVCaeir60WDHNstMILbpxTcOTYCCOGWBXFuCpSwYVryop7MyBIKD4AfmTh/Qb3uB0L1I5jDBdGA6aaqo8HgHo+s48tGyXZcDKgPqnWczP9YdWB9RZxmAlbHkPVwB8V2mqFMgQ9WHET/g0t69DCRsCn2T217jNEV9HbErmvYEyL/GH68bAYw40vxDC0cPe2SU32Tqhu4j8JwstICMMf3g7X4OBD5Am3Pgl1XWlZWoDQZ5gez1yDUGuMZ8O+VdG6dD9lilKaseG6Q0vr4nUdkyFKL3XYNNwZrn1FDJErUPUe+qyjDS1qy8BF2q7W49FL8XRVrw89t93oDqd0ncIpAxXqTtt13Wlld1zAkPGE3c6ViOHG1Si0oCxne4RcYZALUld4+W9ECMUfftzj/DoGuP56wo7rsFKJMWR2MSgdS9MgTQi7jkEwSXNV07UuEp1WC2twN8qx9d22X1WcoLNI7avV2I3CQVvX0Yd39Zk82aWrEamPLt5IBCrFc8gtdiuG3Nv1/SDoTPz7dutujmdkIkSw4gxRlhOGFl76/PY+73fBKW9d9hFiPfQhYqfoqx7Yj+yYb6tqJcGQPSAgmMNes15v9madwGsBczjGR4Z+1do2hp3g9Npw2Anc4HDctIY23uIbetHlB/Om05ybQHCHQX/DYDYzkvkeqBroFuNhDYjeMHgPyN606dStuZdXPuQyEC4w3PgmCi1C0PGBXSExZIwQm3MA8dKDcFEXxeOxHkeIGGYOCdANDBDbx6A7IyC2exLf8ACxs0Dqs5y/S5j8fGqThBbKkqeFn83vwMlAuMgwCC3RVqrASd/SaHL5b9QXYov2Q8vbySIhMpW4HRcwPHGSgTDNcOOLX3biDLm9H/2AHDK8HDK89M+9GESOGybs+GVjmIFQvHI1BfGbL+Na+NZPQU4T2HCM4YVLP0YQOXusLSI8rQw3Nn6O2ra4B5fiDKk//E+ohz/9W4zUUJ4fJUOgKMVbxCsJmyCb4XdCXBH/9VVoy0Fc/s/lQAu/B3FbBm6jvC2jOXOCJPFAWbaXkn25Vtuy2ss1Liwp5Rle/TnZl87Jb8cgxjLEC5felhdqgyjTKhlTFNF0273xeNzrz7zW6vPDC3Soas3nCTGeV+/s5DD85pcAYVhXCH1iAuGln96KUptYbgNL5DZA8KwK9EWHjrtyE6cyJF8enK16oRxJIMxh+L+Cj5AXWmFLMNj7lnrFyzEljOyYkx79GVAEdj+ZY/cYgwG1Hoyj1merM2xThvNyZawDSZKhmMXwu1AJxccXH0uhKooPLsdLDii/juwY7L2zef5RqJOiEXeKLIag1UxaPFydIfDwV6eqeWu1VaUUw8gVcq88eXbu2W+toO7Pg+9/jEG8dPlBqITce79unj+/+XQvKmDHnCJTD6f0fYj/UZFGHgJDjm9XkEOcl2uRPZgwA8oCw3+8GiAEtd+enTt37tnFx2GnDpDfvhDWD5EdB2FEfPTueSybv/8VFAoVcwxzGAKTWLuq9txBzewYU6d7CAw5YWAYHeFFxeUYQiHG8IvQFQLzIkaI5YkcbAlywA8t2I5DhNiOqWy++15QKSR10EyGyoyUuOFQwF0eKLWpzoaH8WBAiQ7C1WSBXpi5RAxDV8jzj8+F8uyiGeYvOLTgeBzaMQ+IHYfyKJyOMKyomQyJlqrR7jpQYoEAKKlyAAhKEaTwGr5efBukagb0MsnCRPpQdNfU4TyGQorh1S9DVyg9eXYuLn9EOyL8g59++CqKx9yj8wnZfCqGXPzdABbDJjFli1VnAqBm9Hu9uVELcIg1E4sMQMsdGlVAX5oBdZm+lKMfovsIpjHv9aZttxZdvuq2p/j6ZtzqAU/PnLm1vL0AMa2CcYbfXImiyW9JhCi0VKMNz+/flBh2HEL8fS8YmlIjwZfF0CIqyuomBmYPb9BDXdOnfrZs13e73a7W4QzcytlRDPxyV/Wr04C+rNvAxCXU3WjPFchus6uRBFTrUl8BwIBeHh9qelJQtRQ8dCY+rGu7vRyvkoHQZ/hFmFjHXGEE8dzjaHM1y459iL++F07C7ulshm3iD9WGIS5SHKphMNIdytjGWqs2OkPiYTtKzcH/6n4Ow5MQjxu0TXLNsPIPavENiTnpdpLnepQwqFqvRWuQci92ZhmGAovhd8ErHjxOESQUn0gLPa0ceJQmSCj+GULkZprKissd3Z+F1Un6KlqzgDop4/r7+JShMyToKh2Ad5rwXEXyiVadHDYXGeJd41j+iRvigDzWfHz+0SZtT5qSwypWT7UMw0WEhGHkCoU/mAhJaIlXF1h2HDnFMEIoXkVj5Ie85c9P7TbdqI9cMSBJk3vG0MI/0R4twrDSqJNZIoaKSyJS0MJKXlgil2SIt5vJax19K5qmEYZtykrTG1CjvhrvSAOT9hI0+7N2r94tZphCKFzZuBpmhZy96ArjFP8QI1Xc+YthxyynaNYZ62XcExdaVGMm+w2UrQlGWPFw+CWrXw0voylDhFabjC0V6aFNVM/3pnNiyoayyLBP06fG0KzaNc/qoxM6hJXquDW75ZFvUcVdoWCI0ap9HpfOpE7eOicDofBLuEBGifXFTIJEFWthNPkzmyBxin9FTnHI2JNSapNw10XV6nSvCakhyRrJx2RMDk65iGG9g3thkOIofXJemycb7cTQWyDJEDdS4HMsW6EZTxUlJsQHIAeBDyk2hThGPokstFXD/yLzkpsMhEJIkOce5xEk8tjvHsu04wDi+cgpMgcF7DmMKKqkb4SE6wACh0GhFDJgqDqdwMjAIEyNwMAhqAG3wHBGdMuJbS2D2oTEIj+bBx4NayiFIhm/2uwUJIeUIRNhIBz/RyHCcxdtshIRCxBiio/ynx9DeeBcDcIhaboGVcxDtVq0JRVrB+5iB5QhjPU4yTTKIEDACM06wVAmWXysT47s8fvQfKT0sh4ALnWTqoVccz7FIoSvPMl2hRHDV+jvEipmeH7znb38ASEDGzZ9XcRrFjCgPrJBpeJHZp9hvB4DZtA/Ik1hsOCJMwTVZjz/oR+ioagZHLLHhOFQwU3ddBC6M+3kfvP5DEHtt2KCoR7ulWAYzxQzKdquv5UKXRBmPFQWGDZiCTkYNIgFC5QVfaQkwbBGsCRa8YBBTNYKDvmqigI28IKkVIXqNG+TPg8hzw3KEFxKD3EN4s8iB4OfElFpAhcwVGEkuhowVBud2LVk4jknVcUjgbyTYmg6ZRnighEwrcA5q0ED3rIMOak4mhyAIYosjwofS1Y6pGCLMnGUexAI/Xk/lHmLYzGkdX/VI7VrlfbWJPWQxg+PYcvByypZcEL6yIvsTR3Nt4icElKOFr7ypCTCJRkSp8gaS+zBQj/bwwxNTFNtLj7awGBIT4VtktlAmpUkYopNAeXFFJNmmb6qAr7qjWlV08pWxByG7OXdYTCMLfxiAvquFHzZSq0RTFdYdHwgsV6OX4jHuZ469pDJBs9CJHNskmLHFs8gldvQiI6TJ5+iwhvkCpNWpgfKcYdiWVNemuG7f7KGovT0sWf7zZokPKKVBuCUOU177aCVybazGCouUdl2hYQWysCka2zy9B7wqG+1TFrlraFPi6Q6oToDkmNTP0zCUU2mN1TI2lvNfcYnWxGBmbtAOSjDrMis9FC8mPSGrmv0aJGRJnsDqpJWx5ZEya4ZEy+qOSQZUqVyLPxZN0j4GtQUOzWzBSS6GQGdNt5taDtzBafm5IT60KyZBrVkrKig3XRb2KXKQ9qDL2YhzGXIl0xtlozLv//F/kYVYon4YW/N3zHQ6a5wn04cTqyx1axoWiZDTpgG6XkzMD3Zr0pCVXcV//tAOZ+OFtq6Th5kpFsQqg5VGobJs1i4FKE5435/2iQbgzBnqzsbIN0VLhVXCEOuzDolL8kmDGOiwimJMsD2exdVBAJNSM9mqLj+Z6PnjZVZkOWRVY8X3+WmD4PK/UQ7kEr3ovF6mda96FByUokcgKSKIJVY6hGGXEmGj/gsv6JMtWiDXkXLg1n42OZUDd9BitqhDDHQBYa4tkVT8fA4aPkVNbrHDLx4WcOvwc4a0THdGZLtABA1WqGb9wufo88iSPZGSkQWxJArx/DdR9lD4XA7L8TPxqE/DWtmhnUJIHg9RydvQGfskizDthqO49STDNHM8VGnEUuJgTmG+KOQFsDxUpLooKY74yCFMef4F0agy6OAFFRrPQv/ggd8y3rPy91bzUAY1VXRDQ6NYcE6DyiKbXa84WzodWp8YqGPVtH4Ddcb2IA6Jt4msujpJXo4nswBfoAvOQiarBXOQ16x73Wq0ZekyKZnzAzPlGKdya0BOYZumb+wylHBQPyN+dUZbv43I5okYJF2wfSogzfiR1hzY2yF0t3T6CCJ1cYCGfo7cBYOpY+xpIAfhZja0jsQw8KSzYsSlDNir9nLzviWkyJ+vlPMr4CVYrj5NDOavGABrXnPQblN/5B6wUoxRE4xd+FXiiFzbXI0gkzUy+oGOIAQfsW/2pZXzHPZFIsZbr5bVDV8kaJghqpqHZIxl/jVwFRAK71JX5rh5n+PiSvEAqrt9tRBuXo/e/m2lJQkiCHKmZGliOHm/6U6F45QQM3R0FKve2g92uUZopwxK7IUMNx8eowIkn2nSsOxjNzfg7aMLMEwe82Sz5BZLDxK4e2qLR/Kgxv+9ZaCCNgbLLkMj1U08eUQAXJLMsxas+QwLN7GO/myJEO0ZmE4xWyGx2Zt8jxlSYTIDKR0D1gmw82nz7WZ/JjIsgixpCJLFsPcStfLIwdAmI4sGQyLN+NfDjkAQpxhJdcsTIZlKl0vh5RBlwSIZaEaxmJ4KqIJlbIMFz4GhCcFDE9FNKGylA0nJFYNYzA8HdGEysEZxiJLiuFxXJs8PzkgQCxK2Ke9wPD0RBMqKzCMIkuSYaz//3TICggRRPFJmuHm02X+lx0vg6yCEAl4vMhw8zRFEyor8COiDM49SzA8VdGEymoEOfzI08VnIcPNX//aeW5DPbayKkLcUfRbyPC0RRMqKyPEkeUPynDvnecyxGMvqyPkuNMWhxdlRXpnwp0xPAw5Q7i6nCFcXc74rS5nBFeXM4KrS8jwjOOB5UwHz+RMXhI5s+UzOZMzOZMzOZMzOZMzOZMzOV7y/wNT6N+iskmpAAAAAElFTkSuQmCC" alt="some text" width="120" height="60"/></center>
                            </div>
                        </div>

                        <div class="col-md-11 control-label">
                            <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>  
                        <div class="col-md-10">
                            <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="cpf">CPF ou CNPJ<h11>*</h11></label>  
                        <div class="col-md-2">
                            <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">
                        </div>

                        <label class="col-md-1 control-label" for="data_nasc">Nascimento<h11>*</h11></label>  
                        <div class="col-md-3">
                            <input id="data_nasc" name="data_nasc" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="date" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                        </div>

                        <!-- Multiple Radios (inline) -->

                        <div class="form-group">
                            <label class="col-md-1 control-label" for="sexo">Sexo <h11>*</h11></label>
                            <div class="col-md-2">
                                <select required id="sexo" name="sexo" class="form-control">
                                    <option value=""></option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                </select>
                            </div>     
                        </div>
                    </div>



                    <!-- Prepended text-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="tel">Telefone <h11>*</h11></label>
                        <div class="col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input id="tel" name="tel" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                       OnKeyPress="formatar('## #####-####', this)">
                            </div>
                        </div>

                        <label class="col-md-1 control-label" for="prependedtext">Telefone</label>
                        <div class="col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input id="tel2" name="tel2" class="form-control" placeholder="XX XXXXX-XXXX" type="text" maxlength="13"  pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                       OnKeyPress="formatar('## #####-####', this)">
                            </div>
                        </div>
                        
                        
                        
                        <!--
                        <div class="col-md-3">
                            <div class="input-group">
                                    <span class="input-group-addon">Situação</span>
                                    <select required id="situacao" name="situacao" class="form-control">
                                        <option value="ativo">Ativo</option>
                                        <option value="inativo">Inativo</option>
                                    </select>
                                </div>

                        </div>
                        -->
                        

                    </div> 

                    <!-- Prepended text-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="email">Email <h11>*</h11></label>
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input id="email" name="email" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
                            </div>
                        </div>
                        
                        <label class="col-md-1 control-label" for="senha">Senha<h11>*</h11></label>  
                        <div class="col-md-4">
                            <input id="senha" name="senha" type="password" placeholder="" class="form-control input-md" required="">

                        </div>
                    </div>


                    <!-- Prepended text-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="prependedtext">Endereço</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon">Rua</span>
                                <input id="rua" name="rua" class="form-control" placeholder="" required="" type="text">
                            </div>

                        </div>
                        <div class="col-md-2">
                            <div class="input-group">
                                <span class="input-group-addon">Nº <h11>*</h11></span>
                                <input id="num" name="num" class="form-control" placeholder="" required=""  type="text">
                            </div>

                        </div>

                        <div class="col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon">Bairro</span>
                                <input id="bairro" name="bairro" class="form-control" placeholder="" required="" type="text">
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="prependedtext"></label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon">Cidade</span>
                                <input id="cidade" name="cidade" class="form-control" placeholder="" required=""  type="text">
                            </div>

                        </div>

                        <div class="col-md-2">
                            <div class="input-group">
                                <span class="input-group-addon">Estado</span>

                                <select required id="estado" name="estado" class="form-control" required="">
                                    <option value="CE">Ceará</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                            </div>

                        </div>


                    </div>


                    <!-- Select Basic -->
                    <div class="form-group">

                        <!-- Select Basic -->
                        <label class="col-md-2 control-label" for="estado_civil">Estado Civil <h11>*</h11></label>
                        <div class="col-md-2">
                            <select required id="estado_civil" name="estado_civil" class="form-control">
                                <option value=""></option>
                                <option value="Solteiro(a)">Solteiro(a)</option>
                                <option value="Casado(a)">Casado(a)</option>
                                <option value="Divorciado(a)">Divorciado(a)</option>
                                <option value="Viuvo(a)">Viuvo(a)</option>
                            </select>
                        </div> 

                        <label class="col-md-1 control-label" for="selectbasic">Escolaridade <h11>*</h11></label>

                        <div class="col-md-2">
                            <select required id="escolaridade" name="escolaridade" class="form-control">
                                <option value=""></option>
                                <option value="Analfabeto">Analfabeto</option>
                                <option value="Fundamental Incompleto">Fundamental Incompleto</option>
                                <option value="Fundamental Completo">Fundamental Completo</option>
                                <option value="Médio Incompleto">Médio Incompleto</option>
                                <option value="Médio Completo">Médio Completo</option>
                                <option value="Superior Incompleto">Superior Incompleto</option>
                                <option value="Superior Completo">Superior Completo</option>
                            </select>
                        </div>


                        <!-- Text input-->

                        <label class="col-md-1 control-label" for="profissao">Profissão<h11>*</h11></label>  
                        <div class="col-md-4">
                            <input id="profissao" name="profissao" type="text" placeholder="" class="form-control input-md" required="">

                        </div>
                    </div>
                </div> 


            </div>

            <!-- Button (Double) -->
            <div class="form-group">
                <label class="col-md-2 control-label" for="Cadastrar"></label>
                <div class="col-md-8">
                    <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
                    <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
                </div>
            </div>

            </div>
            </div>


        </fieldset>
    </form>

</body>
</html>