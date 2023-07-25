<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif" class="mx-auto max-w-screen-2xl w-[30%]">
    <div class="my-4">
        <div class="flex justify-between items-center">
            <h1 class="font-bold text-xl">MY ACCOUNT</h1>

            <button class="border-[1px] border-gray-200 text-3xl px-6 py-2">X</button>
        </div>
        <hr>
        <form method="post" action="index.php?act=signin">
            <div class="py-6 space-y-4">
                <label for="">Login *</label><br>
                <input type="text" name="name" placeholder="" class="py-4 px-4 w-full border-2 rounded border-[#CFCCC8]" required>
            </div>
            <div class=" py-4 space-y-4">
                <label for="">Password *</label><br>
                <input type="password" name="password" placeholder="*******" class="py-4 px-4 w-full border-2 rounded border-[#CFCCC8]" required>
            </div>
            <li class="list-none"><a href=""><u>Forgot your password?</u></a></li>
            <input type="submit" name="signin" class="hover:bg-[#EAE8E4] my-10 hover:text-black bg-black text-[#FFFFFF] w-full text-center py-4 text-[16px]" value="sign in">
        <hr>
        <div class="space-y-10 my-10">
            <span>Enjoy added benefits and a richer experience by creating a personal account</span>
            <button type="button" class="hover:bg-[#EAE8E4] hover:text-black  bg-black text-[#FFFFFF] w-full text-center py-4 text-[16px]">Create
                My RL
                account</button>
        </div>
        </form>

    </div>
</body>

</html>