<style type="text/css">
    

.cancellation-policy {
  font-size: 16px;
  line-height: 1.5;
  color: #333;
}

.cancellation-item {
  margin-bottom: 10px;
}

 
  .price-summary {
    background-color: #f5f5f5;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 20px;
  }

  .price-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
    padding: 5px 0;
    border-bottom: 1px solid #ddd;
  }

  .price-item:last-child {
    border-bottom: none;
  }

  .price-item-title {
    flex-grow: 1;
   /* font-weight: bold;*/
  }

  .price-item-amount {
    font-weight: bold;
  }

  .sub-item {
    margin-left: 20px;
  }

  .collapse-icon {
    margin-right: 5px;
  }

  .collapse-icon.collapsed::before {
    content: "\f078";
  }</style>
<?php
$policy_api_url = 'https://krishpada.com/software/api/policy.php?domain_name='.$domain_name; // Replace with the actual API URL

// You can add query parameters to the URL if needed

// Make the HTTP request to the API
$response = file_get_contents($policy_api_url);

if ($response === false) {
    die('Failed to fetch policy data from the API.');
}

$policy_data = json_decode($response, true); // Convert JSON to PHP array

if ($policy_data === null) {
    die('Failed to decode JSON data from the API.');
}
?>

<?php foreach ($policy_data as $policy_group) { ?>
    <div class="" style="background-color: #f9f9f9; padding: 20px; margin-bottom: 20px;">
        <h5><?php echo $policy_group['policy_type_name']; ?></h5>
        <div class="cancellation-policy">
            <?php
            $serial_number = 1; // Initialize the serial number counter
            foreach ($policy_group['policy_descriptions'] as $policy_description) {
                ?>
                <div class="cancellation-item">
                    <strong><?php echo $serial_number++; ?>. </strong><?php echo $policy_description; ?>
                </div>
                <hr>
            <?php } ?>
        </div>
    </div>
<?php } ?>
