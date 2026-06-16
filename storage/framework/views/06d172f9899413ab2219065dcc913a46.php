


<?php $__env->startSection('title', __('main.header.link_4')); ?>
<?php $__env->startSection('description-seo', $metatag->description ?? getItem('client')); ?>

<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/decisao.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main>
        <div class="content">
            <div class="decisao">
                <div class="title-default">
                    <h1>
                        <?php echo __('decisao.title1'); ?>

                    </h1>

                    <h2>
                        <?php echo __('decisao.subtitle1'); ?>

                    </h2>
                </div>

                <div class="conteudo">
                    <p>
                        <?php echo __('decisao.text1'); ?>

                    </p>

                    <p>
                        <?php echo __('decisao.text2'); ?>

                    </p>

                    <div class="area-itens">
                        <div class="item">

                        </div>
                    </div>

                    <h4>
                        <?php echo __('decisao.title-text'); ?>

                    </h4>

                    <p>
                        <?php echo __('decisao.text3'); ?>

                    </p>

                    <p>
                        <?php echo __('decisao.text4'); ?>

                    </p>
                </div>
            </div>
        </div>
    </main>


    <?php echo $__env->make('includes.saiba-mais', [
        'title' => __('decisao.saiba.title'),
        'subtitle' => __('decisao.saiba.subtitle'),
        'route' => __('decisao.saiba.route'),
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->make('includes.lead', [
        'title' => __('leads.lead.title'),
        'subtitle' => __('leads.lead.subtitle'),
        'botao' => __('leads.lead.botao'),
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\kaikg\Downloads\logus-capital\resources\views/pages/decisao.blade.php ENDPATH**/ ?>