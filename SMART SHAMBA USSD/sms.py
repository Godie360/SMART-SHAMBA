# import package
import africastalking


# Initialize SDK
username = "sandbox"    # use 'sandbox' for development in the test environment
api_key = "2f24b2ef68eb867df20c9910ada1d5c7edc16dd79e5d5b56b4a7d879977acf1c"      # use your sandbox app API key for development in the test environment
africastalking.initialize(username, api_key)


# Initialize a service e.g. SMS
sms = africastalking.SMS


# # Use the service synchronously
# response = sms.send("HABARI", ["+255689737889"])
# response_1 = sms.send("HABARI", ["+255689737889"])
# response_2 = sms.send("HABARI", ["+255689737889"])
# print(response, response_1,response_2)

# Or use it asynchronously
def on_finish(error, response):
    if error is not None:
        raise error
    print(response)

sms.send("KARIBU AFYA MKONONI TUKUJUZE:MDAA HUU NI WA KUMEZA DAWA MPENDWA:KUMBUKA KUMEZA DAWA KWA WAKATI TUNAKUJARI NA KUKUTHAMINI", ["+255624099293"], callback=on_finish)    