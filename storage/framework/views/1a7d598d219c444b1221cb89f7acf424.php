<?php $__env->startSection('title', 'Daftar Donatur'); ?>


<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <span class="fade-in">
            <h1 class="text-center mb-4" id="gradient">
                <i class="fa-solid fa-envelope-open-text"></i>
                Daftar Donatur
            </h1>
        </span>

        <?php if($donaturs->isEmpty()): ?>
            <p class="text-center">Belum ada donatur.</p>
        <?php else: ?>
            <?php $__currentLoopData = $donaturs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donatur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card mb-3">
                    <div class="header">
                        <img src="https://i.ibb.co.com/nQQmMw8/ikonrupiah.png" class="image" />
                        <div>
                            <p class="name"><?php echo e($donatur->nama); ?></p>
                            <p class="amount">
                                <span class="donation-amount">Rp
                                    <?php echo e(number_format($donatur->total_donasi, 0, ',', '.')); ?></span>
                                <span class="via-method"><i class="fa-solid fa-circle"></i> Via
                                    <?php echo e($donatur->tipe_bayar); ?></span>
                            </p>
                            <p class="message"><?php echo e($donatur->pesan); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>

    <style>
        #gradient {
            font-weight: 600;
            background: linear-gradient(to right,
                    #5374cd 20%,
                    #00affa 30%,
                    #0a92ec 70%,
                    #4a64da 80%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            text-fill-color: transparent;
            background-size: 500% auto;
            animation: textShine 5s ease-in-out infinite alternate;
        }

        @keyframes textShine {
            0% {
                background-position: 0% 50%;
            }

            100% {
                background-position: 100% 50%;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .fade-in {
            animation: fadeIn 1.2s ease-in-out;
        }

        .fa-envelope-open-text {
            font-size: 1.7rem;
            margin-right: 1rem;
            vertical-align: 15%;
        }

        .amount {
            font-size: 1rem;
            font-weight: 600;
        }

        .donation-amount {
            color: #22c55e;
            /* Hijau */
        }

        .via-method {
            color: rgba(107, 114, 128, 1);
            /* Abu-abu */
            font-weight: 400;
        }

        .fa-circle {
            font-size: 0.3rem;
            padding: 0.5rem;
            vertical-align: middle;
            color: rgb(200, 206, 217);
        }

        .card {
            background-color: rgba(243, 244, 246, 1);
            padding: 1rem;
            max-width: 1100px;
            border-radius: 30px;
            box-shadow: 0 20px 30px -20px rgba(5, 5, 5, 0.24);
            opacity: 0;
            transform: translateY(50px);
            animation: fadeInUp 1.5s forwards;
        }

        .header {
            display: flex;
            align-items: center;
            grid-gap: 1rem;
            gap: 1rem;
        }

        .header .image {
            height: 4rem;
            width: 4rem;
            border-radius: 9999px;
            object-fit: cover;
            margin-left: 1rem;
            margin-right: 0.7rem;
            /* background-color: royalblue; */
        }

        .name {
            margin-top: 0.1rem;
            margin-bottom: 0.1rem;
            font-size: 1.5rem;
            line-height: 1.75rem;
            font-weight: 600;
            color: rgba(55, 65, 81, 1);
        }

        .message {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            margin-top: -0.5rem;
            color: rgba(107, 114, 128, 1);
        }


        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.card');
            cards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.2}s`;
            });
        });
    </script>



    </html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LARAVEL\website-donasi-laravel\resources\views/donaturs/donaturPublic.blade.php ENDPATH**/ ?>