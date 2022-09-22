<main>
    <div class="section_align">
        <h1>Last Invoices</h1>
       
        <section class="table_title table_align">
           <div><p>Invoices number</p></div>
           <div><p>Due dates</p></div>
           <div><p>Company</p></div>
           <div><p>Created at</p></div>
        </section>

        <div>
            <section class="table_content table_align_4">
                <?php
                foreach($invoices as $invoice) { ?>
                    <div><p><?php echo $invoice['ref']; ?></p></div>
                    <div><p><?php echo $invoice['due_date']; ?></p></div>
                    <div><p><?php echo $invoice['company']; ?></p></div>
                    <div><p><?php echo $invoice['created_at']; ?></p></div>
                <?php
                }
                ?>
            </section>
        </div>
    </div>

    <div class="section_align">
        <h1>Last contacts</h1>
       
       <section class="table_title table_align">
           <div><p>Name</p></div>
           <div><p>Phone</p></div>
           <div><p>Mail</p></div>
           <div><p>Company</p></div>
           <div><p>Created at</p></div>
       </section>
       <div>
           <section class="table_content table_align_5">
                <?php
                foreach($contacts as $contact) { ?>
                    <div><p><?php echo $contact['name']; ?></p></div>
                    <div><p><?php echo $contact['phone']; ?></p></div>
                    <div><p><?php echo $contact['email']; ?></p></div>
                    <div><p><?php echo $contact['company']; ?></p></div>
                    <div><p><?php echo $contact['created_at']; ?></p></div>
                <?php
                }
                ?>
           </section>
       </div>
    </div>

    <div class="section_align">
       <h1>Last companies</h1>
       
       <section class="table_title table_align">
           <div><p>Name</p></div>
           <div><p>TVA</p></div>
           <div><p>Country</p></div>
           <div><p>Type</p></div>
           <div><p>Created at</p></div>
       </section>

       <div>
           <section class="table_content table_align_5">
                <?php
                foreach($companies as $companie) { ?>
                    <div><p><?php echo $companie['name']; ?></p></div>
                    <div><p><?php echo $companie['tva']; ?></p></div>
                    <div><p><?php echo $companie['country']; ?></p></div>
                    <div><p><?php echo $companie['type']; ?></p></div>
                    <div><p><?php echo $companie['created_at']; ?></p></div>
                <?php
                }
                ?>
           </section>
       </div>
    </div> 
</main>