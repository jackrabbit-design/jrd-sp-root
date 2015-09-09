<? /* Template Name: Projects */ get_header(); the_post(); ?>

        <div id="pagetitle">
            <div class="wrap">
                <h1><? the_title() ?></h1>
            </div>
        </div>

        <?php get_template_part('secondary-menu'); ?>

        <? $parent = $post->post_parent; ?>


	    <div class="main">
	        <div class="wrap">
                <p class="openp">Vestibulum tincidunt est a erat porttitor ultricies. Donec leo neque, mattis nec massa ut, posuere viverra mi. Nullam sed mi dapibus, ultrices sem ut, pellentesque lectus. In hac habitasse platea dictumst. Nullam ullamcorper euismod ligula. Sed scelerisque tristique enim at faucibus. </p>

                <table id="projtable" class="sortable" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="projth20">Client</th>
                            <th class="projth20"> Location</th>
                            <th class="projth50">Project</th>
                            <th class="projth20">Project Manager</th>

                        </tr>
                    </thead>

                    <!--<tfoot>
                        <tr>
                            <th>Client</th>
                            <th>Location</th>
                            <th>Project</th>
                            <th>Project Manager</th>

                        </tr>
                    </tfoot>-->

                    <tbody>
                        <tr>
                            <td class="capitalize table20"><a href="#" class="exmore">Summit Healthcare</a></td>
                            <td class="table20">New York, NY</td>

                            <td class="table50"><span class="projname">Integrate Information Systems and Patient Data</span><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tempor augue et facilisis cursus consectetur gravida purus, ut mollis.</td>
                            <td class="table20"><p>Mary Jo Whittaker</p>
                                <p><a href="#" class="exmore">View Projects</a></p>
                                <p><a href="#" class="exmore">View Bio</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td class="capitalize table20"><a href="#" class="exmore">Cerner</a></td>
                            <td class="table20">Hingham, MA</td>

                            <td class="table50"><span class="projname">Integrate Information Systems and Patient Data</span><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tempor augue et facilisis cursus consectetur gravida purus, ut mollis.</td>
                            <td class="table20"><p>Mark Hammerson</p>
                                <p><a href="#" class="exmore">View Projects</a></p>
                                <p><a href="#" class="exmore">View Bio</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td class="capitalize table20"><a href="#" class="exmore">Summit Healthcare</a></td>
                            <td class="table20">New York, NY</td>

                            <td class="table50"><span class="projname">Integrate Information Systems and Patient Data</span><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tempor augue et facilisis cursus consectetur gravida purus, ut mollis.</td>
                            <td class="table20"><p>Mary Jo Whittaker</p>
                                <p><a href="#" class="exmore">View Projects</a></p>
                                <p><a href="#" class="exmore">View Bio</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td class="capitalize table20"><a href="#" class="exmore">Cerner</a></td>
                            <td class="table20">Hingham, MA</td>

                            <td class="table50"><span class="projname">Integrate Information Systems and Patient Data</span><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tempor augue et facilisis cursus consectetur gravida purus, ut mollis.</td>
                            <td class="table20"><p>Mark Hammerson</p>
                                <p><a href="#" class="exmore">View Projects</a></p>
                                <p><a href="#" class="exmore">View Bio</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td class="capitalize table20"><a href="#" class="exmore">Cerner</a></td>
                            <td class="table20">Hingham, MA</td>

                            <td class="table50"><span class="projname">Integrate Information Systems and Patient Data</span><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tempor augue et facilisis cursus consectetur gravida purus, ut mollis.</td>
                            <td class="table20"><p>Mark Hammerson</p>
                                <p><a href="#" class="exmore">View Projects</a></p>
                                <p><a href="#" class="exmore">View Bio</a></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
	        </div>
	    </div>

<? get_footer(); ?>
